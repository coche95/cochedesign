<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Coche Design</title>
<style>
body {
  margin: 0;
}

/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
    position: -webkit-sticky; /* Safari */
	position: sticky;
	top: 0;
	z-index: 1;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: 'Archivo Narrow';
  font-size: 175%;
  font-weight: bold;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: IndianRed;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

#peacock {
	float: left;
	margin: 125px 0px 100px 270px;
	cursor: pointer;
    transition: 0.3s;
}

#peacock:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes zoom {
  from {transform: scale(0.1)} 
  to {transform: scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover, .close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

input[type=text], select, textarea {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}

input[type=submit] {
    background-color: IndianRed;
    font-size: 12px;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

#forms {
	text-align: center;
	font-family: 'Archivo Narrow';
	margin: 0px 0px 0px 670px;
	width: 500px;
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .topnav a {
	font-size: 50%;	
	}
  #peacock {
    display: block;
	margin-left: auto;
	margin-right: auto;
	max-width: 100%;
	height: auto;
	}
  .modal-content {
    width: 100%;
	}
  #forms {
    display: block;
	margin-left: auto;
	margin-right: auto;
	max-width: 75%;
	height: auto;
	}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .example {background: green;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .example {background: blue;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .example {background: orange;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .example {background: pink;}
}
</style>
</head>

<body>

<!-- <div id="grad1"></div> -->
<div class="topnav">
  <a class="active" href="index.html">HOME</a>
  <a href="contactform.php">CONTACT</a>
  <a href="resume.html">RESUME</a>
  <div class="topnav-right">
  <!--  <a href="#search">Search</a> -->
    <a href="about.html">CHRISTIAN ROBERTS</a>
  </div>
</div>
<br>
<br>

<!--table style="width:100%">
  <tr>
	<td><h1><font-color=MidnightBlue><a href="index.html">Home</a></font></h1></td>
	<td><h1><font-color=MidnightBlue><a href="portfolio.html">Portfolio</a></font></h1></td>
	<td><h1><font-color=MidnightBlue><a href="about.html">About</a></font></h1></td>
	<td><h1><font-color=MidnightBlue><a href="contact.html">Contact</a></font></h1></td>
	<td><h1><font-color=MidnightBlue><a href="links.html">Links</a></font></h1></td>
	<td><h1><font-color=MidnightBlue><a href="http://digitalarts.lmu.edu/crober42/blog/wp-admin/index.php">Blog</a></font></h1></td>
</tr>
</table-->

<img id="peacock" title="Exquisite Peacock" alt="Exquisite Peacock" src="Exquisite8copy.png" style="width:300px;height:231px;" />

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('peacock');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<div id="forms">
<p>Please feel free to contact me through email, croberts1995@gmail.com, or the form below!</p>
<form action="contactprocess.php" method="post" target="_self">
  <input type="text" name="name" placeholder="Name">
<br>
  <input type="text" name="email" placeholder="Email">
<br>
  <textarea type="text" name="message" placeholder="Message" style="height:200px"></textarea>
<br>
<input type="submit" value="SUBMIT">
</form>
</div>

</body>
</html>