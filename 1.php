<html>
<head>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<style>
.footer{
    height:100px;
    width:1330;
    padding:30px 90px;
    color:#606060;
    float:left;
    background-color:#e0e0e0;
}



* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons*/
.prev, .next {
background-color:black;
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



.btn{

padding:8px;
margin-top:-1px;

}


</style>
</head>
<body>


<div class="wrapper">
         <div class="btn success"><a href="#" >LOGIN</a></div>
         <div class="btn success2"><a href="registration.php">REGISTER</a></div>

<div id="header">
      <img src="h.png"   class="oo" />
      <h1 >Blood Bank  Management</h1>
</div>



<div class="icon-bar">
  <a href="#" class="active" ><b><i class="fa fa-home"><b style="font-family:tahoma;">&nbspHOME </b></font></i></a> 
  <a href="aboutUs.php"><i class="fa fa-info-circle"><span style="font-family:tahoma;">&nbspABOUT US</span></i></a> 
  <a href="contact.php"><i class="fa fa-envelope"  ><span style="font-family:tahoma;">&nbspCONTACT US</span></i></a> 
  <a href="#" style="font-family:tahoma;"><i class="fa fa-globe"><b style="font-weight:normal;font-family:tahoma;">&nbspSERVICES</b></i></a>

<?php
  echo "<a href=\"admin.php\"><i class=\"fa fa-user\"><span style=\"font-family:tahoma;\">&nbspADMIN</span></i></a>"; 
?>
  
<?php 
 
  echo "<a href=\"registration.php\">   <i class=\"fa fa-user\"><span style=\"font-family:tahoma;\">&nbsp REGISTER |  LOGIN</span></i></a>";
  ?>
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="11.jpg" style="width:1000px;height:400px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="8.png" style="width:1000px;height:400px;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="cover.jpg" style="width:1000px;height:400px;">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


	
<h2 ><font color="crimson">Online Blood Bank Management system</font></h2>

<hr style="border: 1px solid #d8d8d8" class="hrline"/>
	
	
<div class="d1">
	<div class="a">
	 <br>
	<a href="#" class="myiconcolor"><i class="fa fa-user"><font size="3" >&nbsp&nbspDonor Registration</font></i></a>
    </div>
	<h5 style="font-weight:bold;font-family:comic sans ms;color:#939393;">Have you at any time witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking? This thought laid our foundation.</h5>
	
	<button class="btn danger"><a href="registration.php">Click Here</a></button>
</div>	



<div class="d2">
	<div class="a">
	 <br>
	<a href="#" class="myiconcolor"><i class="fa fa-user"><font size="3" >&nbsp&nbspNeed Blood</font></i></a>
    </div>
	<h5 style="font-weight:bold;font-family:comic sans ms;color:#939393;">Have you at any time witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking? This thought laid our foundation</h5>
	<button class="btn danger"><a href="searchDonors.php">Click Here</a></button>
</div>



<div class="d3">
<div class="a">
	 <br>
	<a href="searchDonor.php" class="myiconcolor"><i class="fa fa-search"><font size="3" >&nbsp&nbspSearch Donor</font></i></a>
    </div>
<h5 style="font-weight:bold;font-family:comic sans ms;color:#939393;">Some people who have serious injuries  they need blood transfusions to replace blood lost during the injury. Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</h5>

<button class="btn danger"><a href="searchDonors.php">Click Here</a></button>
</div>	


<div class="footer">

<font style="font-family:arial;font-weight:normal;" size="2">
<a href="searchDonors.php">Search Donors <a/>
&nbsp | &nbsp 
<a href="aboutUs.php"> About Us <a/>
&nbsp |  &nbsp 
<a href="registration.php">Register As Donor </a>
&nbsp | &nbsp 
<a href="bloodTips.html">Blood Tips</a>
&nbsp| &nbsp 
<a href="privacyPolicy.html">Privacy Policy</a><br><br>
All rights reserved © 2017
</font>
</div>	
	
</div>

	
</body>

</html>