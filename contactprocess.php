<!DOCTYPE html>
<html lang="en">
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
</style>
</head>

<body>
<div class="topnav">
  <a class="active" href="index.html">HOME</a>
  <a href="contactform.php">CONTACT</a>
  <a href="resume.html">RESUME</a>
  <div class="topnav-right">
  <!--  <a href="#search">Search</a> -->
    <a href="about.html">CHRISTIAN ROBERTS</a>
  </div>
</div>

<h1>Thank You</h1>
<p>Here is the information you have submitted:</p>
<ol>
    <li><em>Name:</em> <?php echo $_POST["name"]; ?></li>
    <li><em>Email:</em> <?php echo $_POST["email"]; ?></li>
    <!-- <li><em>Subject:</em> <?php echo $_POST["subject"]?></li> -->
    <li><em>Message:</em> <?php echo $_POST["message"]; ?></li>
</ol>
</body>
</html>