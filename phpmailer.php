<?php

  if(isset($_POST['submit'])){

	require ('class.phpmailer.php');
  require ('class.smtp.php');
  require ('Autoload.php');

    
		$name 		= ($_POST['fname']);
		$email 		= ($_POST['email']);
		$phone 		= ($_POST['phone']);
		$alt_phone 	= ($_POST['alt_phone']);
		$service 	= ($_POST['service']);
		$date 		= ($_POST['date']);
		$textMsg 	= ($_POST['other_info']);
    $mail = new PHPMailer();
      $mail->CharSet = 'UTF-8';
      $mail->IsSMTP();
      $mail->Host       = "smtp.gmail.com";
      $mail->Port       = 465;
      $mail->SMTPAuth   = TRUE;
      //$mail->SMTPSecure = "TLS";
      $mail->SMTPAutoTLS = false;
      $mail->SMTPSecure = 'ssl';
      $mail->Username   = "samuelmarvin2@gmail.com";          
      $mail->Password   = "143256raxmmpj";
      $mail->SMTPDebug  = 0;  
      $mail->setFrom($_POST['email'], $_POST['fname']);
      $mail->addAddress('heerendrap@digi-growth.com');
      
      $mail->isHTML(true);
      $mail->Subject = 'Contact Us';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>phone : $phone<br>Alt_phone : $alt_phone <br>service : $service <br>date : $date<br> other_info :$textMsg </h3>";

      //$mail->send();
      //print_r($_POST);
    $redirect = 'http://www.proptension.com/management/index1.php';
		if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
			
		} else {
      echo '<script>alert("Thankyou. Our Team will contact you very soon.");  window.location="'.$redirect.'"; </script>';
		}		
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="robots" content="follow, index, all" >
<title>Proptension</title>
<!-- css -->
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="stylesheet" href="css/default.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<link rel="stylesheet" href="css/jquery-ui-git.css" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102033494-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body id="home">
<!-- Google Code for Landing page leads Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 950205093;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "MCTbCKOv8XIQpfWLxQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/950205093/?label=MCTbCKOv8XIQpfWLxQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<header>
 <div class="menu"> <span></span> <span></span> <span></span> </div>
 <div class="container-fluid">
  <div class="">
   <div class="col-4">
    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="logo"></a></div>
   </div>
   <div class="col-8">
    <div class="contacts">
     <div class="contactno">
     	<img src="images/callwatsup-icon.png" alt="Contact"> +91-924-299-9999
        <span><img src="images/email-icon.png" alt="Contact"> ramesh.mariyappan@proptension.com</span>
     </div>
    </div>
    <nav>
     <ul class="navi">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
	   <li><a href="#testimonial">Testimonial</a></li>
      <li><a href="#contact">Contact Us </a></li>
     </ul>
    </nav>
   </div>
  </div>
 </div>
</header>
<div class="banner"> <img src="images/banner.jpg" alt="banner">
 	<div class="banr-form">
  		<h3 class="form-hd">Wish us to call you back</h3>
		<form action="#" method="post">
			<div class="col-6 form-group">
				<input type="text" id="fname" name="fname" class="form-control" placeholder="Full Name" required>
			</div>
			<div class="col-6 form-group">
				<input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
			</div>
			<div class="col-6 form-group">
				<input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number">
			</div>
			<div class="col-6 form-group">
				<input type="text" id="alt_phone" name="alt_phone" class="form-control" placeholder="Alternative Contact Number">
			</div>
			<div class="col-6 form-group">
				<select id="service" name="service" valid="" class="form-control manul" required>
					<option value="">Select Home Service</option>
					<option value="Property Management">Property Management</option>
					<option value="Carpentry Services">Carpentry Services</option>
					<option value="Painting Services">Painting Services</option>
					<option value="packers and movers">Packers and movers</option>
					<option value="Interior Design">Interior Design</option>
				</select>
			</div>
			<div class="col-6 form-group">
				<!--<input type="date" id="date" name="date" class="form-control" placeholder="Service Date" required>-->
				<input class="form-control" name="date" id="datepicker-1" placeholder="Select Service Date" required>
			</div>
			<div class="col-12 form-group">
				<textarea id="other_info" name="other_info" class="form-control" placeholder="Other Information"></textarea>
				<!--<input type="text" class="form-control" placeholder="Other Information">-->
			</div>
			<div class="col-12 txt-center">
				<button type="submit" id="submit_contact" name="submit" class="btn-submit">Submit</button>
			</div>
		</form>
	</div>
</div>
<section class="container-fluid abt-section" id="about">
 <div class="row">
  <div class="col-6">
   <div class="abt-cont">
    <h1 class="sec-head">About</h1>
    <p class="sec-cont">PropTension is one of the leading property management companies in Bangalore. It is operating under the business name of Proptension india Pvt Ltd, which was founded in Jun 2014.</p>
    <p class="sec-cont">Our primary purpose for Apartment Owners is to remove the stress and strain of the owners in not only managing their property but also by ensuring a continuous assured rental return from the property by providing a knowledgeable, trusted and dependable service.
     We look to set the standards for property management, administration and financial control and by utilising the latest technology, to show our customers that we really care when looking after their home.</p>
    <p class="sec-cont">Our primary purpose for Tenants is to provide them with a good and well maintained flat as per their needs and ensuring a peaceful stay in the home of their choice.</p>
   </div>
  </div>
  <div class="col-6">
   <div class="row"><img src="images/about-bnr.jpg" alt="About Us" class="img-responsive"></div>
  </div>
 </div>
</section>
<section class="servicebg" id="services">
 <div class="container">
  <div class="col-12 txt-center">
   <h2 class="sec-head">Property Management</h2>
   <p class="sec-cont txt-center">Our primary purpose for Apartment Owners is to remove the stress and strain of the owners in not only managing their property but also by ensuring a continuous assured rental return from the property by providing a knowledgeable, trusted and dependable service.</p>
  </div>
  <div class="row">
   <div class="col-3">
    <div class="thumbs-block"> <img src="images/carpentry-icon.jpg" alt="Carpentry Services">
     <div class="thumbs">
      <h3>Carpentry <span>Services</span></h3>
      <a href="#contact">Book Now</a> </div>
    </div>
   </div>
   <!--Services Thumb Closed--> 
   
   <!--Services Thumb-->
   <div class="col-3">
    <div class="thumbs-block"> <img src="images/painting-icon.jpg" alt="Painting Services">
     <div class="thumbs">
      <h3>Painting <span>Services</span></h3>
      <a href="#contact">Book Now</a> </div>
    </div>
   </div>
   <!--Services Thumb Closed--> 
   <!--Services Thumb-->
   <div class="col-3">
    <div class="thumbs-block"> <img src="images/packers-icon.jpg" alt="Packers and Movers">
     <div class="thumbs">
      <h3>Packers and <span>Movers</span></h3>
      <a href="#contact">Book Now</a> </div>
    </div>
   </div>
   <!--Services Thumb Closed--> 
   <!--Services Thumb-->
   <div class="col-3">
    <div class="thumbs-block"> <img src="images/interior-icon.jpg" alt="Interior Design">
     <div class="thumbs">
      <h3>Interior <span>Design</span></h3>
      <a href="#contact">Book Now</a> </div>
    </div>
   </div>
   <!--Services Thumb Closed--> 
  </div>
 </div>
</section>
<section class="container-fluid " id="testimonial">
 <div class="container">
  <div id="testimonials">
   <h2>TESTIMONIALS</h2>
   <div id="test_container">
    <div class="testimonial">
     <div class="testimonial_text">I came to know about Propertension through DLF group. with my four month contact with them , without hesitation I can say that Propertention very professional company, Ramesh always available, he very prompt , As Iam NRI without coming down even once to India with his help all the paperwork work rent agreements done successfully and continues I am very happy it's his work. I already recommended PROPERTENTION to number of friends and continues to do so SURYA AITHAL NWA7095 DLF WESTEND HEIGHTS BANGALORE I came to know about Propertension through DLF group. with my four month contact with them , without hesitation I can say that Propertention very professional company, Ramesh always available, he very prompt , As Iam NRI without coming down even once to India with his help all the paperwork work rent agreements done successfully and continues I am very happy it's his work. I already recommended PROPERTENTION to number of friends and continues to do so SURYA AITHAL NWA7095 DLF WESTEND HEIGHTS BANGALORE </div>
     <h3 class="testimonial_name">-Surya Aithal</h3>
    </div>
    
    <div class="testimonial">
     <div class="testimonial_text"> Proptension property management company genuinely is a ethical and honest company. They make very very good care of the customer and manage the property very well. They have done lot of furnishings in my property without me present, then hired a tenant and crediting the rent every month. Lastly they are very prompt in giving any clarification or feedback. So overall it is a very good property management company and have recommended two of my friends also. Proptension property management company genuinely is a ethical and honest company. They make very very good care of the customer and manage the property very well. They have done lot of furnishings in my property without me present, then hired a tenant and crediting the rent every month. Lastly they are very prompt in giving any clarification or feedback. So overall it is a very good property management company and have recommended two of my friends also. </div>
     <h3 class="testimonial_name">-Ritambar Chakraborty</h3>
     <div class="testimonial_designation">(Working with lufthansa - Germany - Owner of GR Lavender)</div>
    </div>
    
    <div class="testimonial">
     <div class="testimonial_text">I have hired proptension for my property management. Here is what they did: 1. They did the painting for my house off-course they charged me but it was quite reasonable. 2. They found the Tenant. 3. They did the rectification work as per the tenant requirement 4. They cleaned up my water tank. 5. They did my plumbing work. 6. They did my electrical work. I just paid them for all the these work. Amount was reasonable. I was dealing with Menaka Ramesh... she is quite responsive. I have never faced any issue till now. I have hired proptension for my property management. Here is what they did: 1. They did the painting for my house off-course they charged me but it was quite reasonable. 2. They found the Tenant. 3. They did the rectification work as per the tenant requirement 4. They cleaned up my water tank. 5. They did my plumbing work. 6. They did my electrical work. I just paid them for all the these work. Amount was reasonable. I was dealing with Menaka Ramesh... she is quite responsive. I have never faced any issue till now.</div>
     <h3 class="testimonial_name">-Kumud Kumar</h3>
     <div class="testimonial_designation">(IT- Consultant CISCO-USA)</div>
    </div>
    
    <div class="testimonial">
     <div class="testimonial_text"> Completely satisfied with their property management service. They keep up their promises. Always quick to respond. Trustworthy people and very friendly to work with. Found the tenants in a relatively reasonable period of time and enabled a smoother transition when my previous tenant vacated. Overall a very satisfied customer. Kudos to the entire team for maintaining expected level of standards. I would highly recommend proptension for owners looking out to manage their property in a hassle-free manner. Completely satisfied with their property management service. They keep up their promises. Always quick to respond. Trustworthy people and very friendly to work with. Found the tenants in a relatively reasonable period of time and enabled a smoother transition when my previous tenant vacated. Overall a very satisfied customer. Kudos to the entire team for maintaining expected level of standards. I would highly recommend proptension for owners looking out to manage their property in a hassle-free manner.</div>
     <h3 class="testimonial_name">-Amit</h3>
     <div class="testimonial_designation">(IT- Consultant-Here USA- owner of Janavi Medows)</div>
    </div>
    
    <div class="testimonial">
     <div class="testimonial_text"> I am an NRI and using their services for close to 2yrs. Not once have I faced an issue with them till date. Ethical and transparent in their dealings with me till date and getting the rent on time I am an NRI and using their services for close to 2yrs. Not once have I faced an issue with them till date. Ethical and transparent in their dealings with me till date and getting the rent on time</div>
     <h3 class="testimonial_name">-Parmanand Nayak Parmanand Nayak </h3>
     <div class="testimonial_designation"> (Retired person - Owner of Raja Sannidhi)</div>
    </div>
    
   </div>
   <div id="t_pagers"><a class="pager"></a><a class="pager"></a><a class="pager"></a> <a class="pager"></a><a class="pager"></a></div>
  </div>
 </div>
</section>

<section class="container-fluid callback-bg" id="contact">
 <div class="txt-center">
  <h2 class="sec-head">Wish us to call you back</h2>
 </div>
 <div class="forms">
	<form action="" method="post">
		<div class="col-6 form-group">
		<input type="text" id="fname" name="fname" class="form-control" placeholder="Full Name" required>
		</div>
		<div class="col-6 form-group">
		<input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
		</div>
		<div class="col-6 form-group">
		<input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number">
		</div>
		<div class="col-6 form-group">
		<input type="text" id="alt_phone" name="alt_phone" class="form-control" placeholder="Alternative Contact Number">
		</div>
		<div class="col-6 form-group">
		<select id="service" name="service" valid="" class="form-control manul" required>
			<option value="">Select Home Service</option>
			<option value="Property Management">Property Management</option>
			<option value="Carpentry Services">Carpentry Services</option>
			<option value="Painting Services">Painting Services</option>
			<option value="packers and movers">Packers and movers</option>
			<option value="Interior Design">Interior Design</option>
		</select>
		</div>
		<div class="col-6 form-group">
		<!--<input type="date" id="date" name="date" class="form-control" placeholder="Service Date" required>-->
		<input class="form-control" name="date" id="datepicker-1" placeholder="Select Service Date" required>
		</div>
		<div class="col-12 form-group">
		<textarea id="other_info" name="other_info" class="form-control" placeholder="Other Information"></textarea>
		<!--<input type="text" class="form-control" placeholder="Other Information">-->
		</div>
		<div class="col-12 btn-call">
		<button type="submit" id="submit_contact" name="submit_contact" class="btn-submit">Submit</button>
		</div>
	</form>
 </div>
</section>
<footer class="container-fluid">
 <div class="container">
  <div class="row">
   <div class="col-4 address">
    <p class="adrs-hd">Proptension India Pvt Ltd.</p>
    <p># 6/7,2nd Floor,Maruthi Mansion,</p>
    <p>Behind Forum Mall, Hosur Rd</p>
    <p>Koramangala,Bangalore - 560029 India</p>
   </div>
   <div class="col-4">
    <ul class="cont-dtls">
		<li><img src="images/email-icon.png" alt="Email">ramesh.mariyappan@proptension.com</li>
		<li><img src="images/phone-icon.png" alt="Call">+91-80-6000-7000</li>
		<li><img src="images/phone-icon2.png" alt="Call">+91-92-4299-9999</li>
		<li><img src="images/watsup-icon.png" alt="Watsup"> +91-92-4330-0000</li>
    </ul>
   </div>
   <div class="col-4">
    <div class="txt-center">
     <h2 class="sec-head white-color">Follow us</h2>
    </div>
    <p class="txt-center white-color">Connect with us</p>
    <ul class="social">
     <li><a href="https://www.facebook.com/proptension"><img src="images/facebook.png" alt="Facebook"></a></li>
     <li><a href="https://twitter.com/proptension"><img src="images/twitter.png" alt="Twitter"></a></li>
     <li><a href="https://plus.google.com/114269581024753799745/about"><img src="images/google.png" alt="Google"></a></li>
     <li><a href="https://www.instagram.com/proptension/"><img src="images/instragram.png" alt="Instagram"></a></li>
     <li><a href="https://www.linkedin.com/company-beta/13310076"><img src="images/linkedin.png" alt="Linkedin"></a></li>
    </ul>
   </div>
  </div>
  <div class="col-12 white-color txt-center">Copyright 2017. All rights reserved.</div>
 </div>
</footer>
<!--<div class="backtotop"><a href="#top" ><i class="fa fa-arrow-up"></i></a></div>--> 
<!-- js --> 
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-git.js"></script>
<script>
$(document).ready(function(){
	$(".menu").click(function(){
		$("nav").slideToggle();
			
		});
	});
</script> 
<script>
/** smooth scroll**/
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
/** head fix**/
  $(window).scroll(function() {
	  if ($(this).scrollTop() > 400){  
		  $('.topnav').addClass("sticky");
		  $('.backtotop').css("display" , "block");
		}
		else{
		  $('.topnav').removeClass("sticky");
		  $('.backtotop').css("display" , "none");
		}
	  });  
	  
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
                var w,mHeight,tests=$("#testimonials");
                w=tests.outerWidth();
                mHeight=0;
                tests.find(".testimonial").each(function(index){
                                $("#t_pagers").find(".pager:eq(0)").addClass("active");                //make the first pager active initially
                                if(index==0)
                                                $(this).addClass("active");           //make the first slide active initially
                                if($(this).height()>mHeight)       //just finding the max height of the slides
                                                mHeight=$(this).height();
                                var l=index*w;                                                  //find the left position of each slide
                                $(this).css("left",l);                                          //set the left position
                                tests.find("#test_container").height(mHeight);                //make the height of the slider equal to the max height of the slides
                });
                $(".pager").on("click",function(e){           //clicking action for pagination
                                e.preventDefault();
                                next=$(this).index(".pager");
                                //clearInterval(t_int);    //clicking stops the autoplay we will define later
                                moveIt(next);
                });
                var t_int=setInterval(function(){               //for autoplay
                                var i=$(".testimonial.active").index(".testimonial");
                                if(i==$(".testimonial").length-1)
                                                next=0;
                                else
                                                next=i+1;
                                moveIt(next);
                },6000);
});
function moveIt(next){ //the main sliding function
                var c=parseInt($(".testimonial.active").removeClass("active").css("left"));           //current position
                var n=parseInt($(".testimonial").eq(next).addClass("active").css("left"));             //new position
                $(".testimonial").each(function(){            //shift each slide
                                if(n>c)
                                                $(this).animate({'left':'-='+(n-c)+'px'});
                                else
                                                $(this).animate({'left':'+='+Math.abs(n-c)+'px'});
                });
                $(".pager.active").removeClass("active");            //very basic
                $("#t_pagers").find(".pager").eq(next).addClass("active");         //very basic
}
</script>
<script>
                $("#datepicker-1").datepicker();
                  var datepicker1 = $("#datepicker-1").on("change", function() {
                  $("#datepicker-2").datepicker("option",
                                "minDate", datepicker1.val());
                });
</script>

</body>
</html>
