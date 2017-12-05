<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell"/>
<head>
 
<title>MoviesSG</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

h3 {
	margin-left:0cm;
	font-size:18px;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	text-decoration:underline;
	color:white;
}

h5{ 
	color:white;
}	

/* Style the header */
.header {
    background-color:  #1a1a1a;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
	background-color: #262626;
	height: 1200px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
.dropbtn {
    background-color: #333;
    color: white;
    padding: 14px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #ddd;
}

.dropdown {
    float:left;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	float:none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

a:link {
    color: white; 
    background-color: transparent; 
    text-decoration: none;
}

a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: white;
    background-color: transparent;
    text-decoration: none;
}

a:active {
    color: white;
    background-color: transparent;
    text-decoration: underline;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

button {
  display: inline-block;
  padding: 30px 80px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
</style>
</head>
<body>

<div class="header">
	<div style="color:white;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">
  <h1><a href="homepage.php">MoviesSG</a></h1>
  <p>Find cinemas near you!</p>
</div>

<div class="topnav"
	style="font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">
  <a href="#">Movies</a>
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"
	style="font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">Cinemas</button>
  <div id="myDropdown" class="dropdown-content"> 
    <a href="#home">Cathay</a>
    <a href="#about">Golden Village</a>
    <a href="#contact">Shaw Theatres</a>
  </div>
  </div>
  <a href="#">Promotions</a>
  <a href="Contact.php">Contact</a>
  <a href="AboutUs.php">About Us</a>
</div>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
}
?>

<div class="row">
  <div class="column side">
  <div class="Bocks" style="float: left; background-color: #1a1a1a; width: 300px; height: 250px; border: 1px solid black; margin: 15px;margin-left:50px;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">
	<h4 style="color: white; background-color: #656565; text-align: center; margin: 0px; padding: 0px;font-size:20px;">Login</h4>
	<div id="InnerBocks" style="height: 250px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
	<div style="color:white"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}
	?></div>
    <p><form action="Homepage.php" method="post">
	<table>
	<tr>
	<td align="left" style="color:white">Username:</td>
	<td align="right"><input type="text" name="username" required>
	</tr>
	<tr>
	<td align="left" style="color:white">Password: </td>
	<td align="right"><input type="password" name="password" required>
	</tr></p>
	</table>
	<div class="checkbox">
    <label style="color:white"><input type="checkbox" style="margin-left:2cm;"> Remember me</label>
	</div>
	<input type="submit" name="login" style="margin-left:5cm"/>
	</br><a href="Registration.php" style="margin-left:1cm"><u>Register</u></a>
	<input type="submit" value="Forgot Password"
	style="margin-left:0.5cm;border:none;background-color:#1a1a1a;color:white;text-decoration: underline;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;"/>
	</div></div>
	</form>
	<div class="Bocks" style="float: left; background-color: #1a1a1a; width: 300px; height: 500px; border: 1px solid black;margin: 15px;margin-left:50px;">
	<h4 style="color: white; background-color: #656565; text-align: center; margin: 0px; padding: 0px;font-size:20px;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">Categories</h4>
	<div id="InnerBocks" style="height: 500px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
	<h3><table>
	<tr><td align="left" style="color:white;">All</td></tr>
	<tr><td align="left" style="color:white;">Action</td></tr>
	<tr><td align="left" style="color:white;">Adventure</td></tr>
	<tr><td align="left" style="color:white;">Animation</td></tr>
	<tr><td align="left" style="color:white;">Comedy</td></tr>
	<tr><td align="left" style="color:white;">Crime</td></tr>
	<tr><td align="left" style="color:white;">Drama</td></tr>
	<tr><td align="left" style="color:white;">Fantasy</td></tr>
	<tr><td align="left" style="color:white;">Horror</td></tr>
	<tr><td align="left" style="color:white;">Kids</td></tr>
	<tr><td align="left" style="color:white;">Music</td></tr>
	<tr><td align="left" style="color:white;">Mystery</td></tr>
	<tr><td align="left" style="color:white;">Romance</td></tr>
	<tr><td align="left" style="color:white;">Sci-Fi</td></tr>
	<tr><td align="left" style="color:white;">Thriller</td></tr>
	</table></h3>
  </div>
  </div>
  <form action="test1.php">
  <button class="button" style="margin-left:50px">Meme Machine</button>
  </div>
  <div class="column middle">
  <div class="Bocks" style="float: left; background-color: #1a1a1a; width: 700px; height: 1100px; border: 1px solid black; margin: 15px;">
	<h4 style="color: #ffffff; background-color: #656565; text-align: center; margin: 0px; padding: 0px;font-size:20px;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">Marvel's Thor: Ragnarok</h4>
	<div id="InnerBocks" style="height: 1100px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
    <table cellspacing="30"
	style="color:white;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">
	<tr>
	<td align="left" valign="top">
	<img src="https://media.gv.com.sg/imagesresize/img6111.jpg" alt="Thor Image" style="width:200px;height:300.86px;"/>
	</td>
	<td valign="top" style="font-size:15px"><text style="font-size:25px"><u>Synopsis</u></text></br></br>
	In Marvel Studios' "Thor: Ragnarok", Thor is imprisoned on the other side of the universe without his mighty hammer and finds himself in a race against time to get back to Asgard to stop Ragnarok- the destruction of his homeworld and the end of Asgardian civilization- the hands of an all-powerful new threat, the ruthless Hela. But first he must survive a deadly gladiatorial contest that pits him against his former ally and fellow Avenger- the Incredible Hulk! 
	</td></tr>
	</div></div>
</table>
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/ue80QwXMRHg" frameborder="0" allowfullscreen></iframe></center>
</br>
<div style="color:white;font-family: Cantarell;font-style: normal;font-variant: normal;font-weight: 500;font-size:20px"><center>
Book your tickets now!</br></br>
<a href="https://www.gv.com.sg/GVMovieDetails#/movie/6111"><u>Golden Village</u></a></br></br>
<a href="http://www.shaw.sg/sw_moviedetails.aspx?filmCode=154%2083%20226%2057%20227%20111%2057%20245%20173%2047%20178%20217%20190%20185%20254%207"><u>Shaw Theatres</u></a></br></br>
<a href="http://www.cathaycineplexes.com.sg/movies/marvels-thor-ragnarok-pg13/"><u>Cathay Cineplexes</u></a></br></br></center></div>

  </div>
  </div>
  </div>
  <div class="column side">
    <div class="Bocks" style="float: right; background-color: #1a1a1a; width: 350px; height: 200px; border: 1px solid black; margin: 15px;">
	<h4 style="color: #ffffff; background-color: #656565; text-align: center; margin: 0px; padding: 0px;font-size:20px;font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">Ongoing Promotions</h4>
	<div id="InnerBocks" style="height: 200px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
	<span style="font-size: 14pt;color:white;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;"><b>Golden Villiage:</b></br><u>Weekend Combo Deal</u>
	</br><b>Shaw Theaters:</b></br><u>Shaw Popcorn Feast</u>
	</br><b>Cathay:</b></br><u>Free Flow Drinks Weekend</u></span></div>
	</div>
	<div class="Bocks" style="float: right; background-color: #1a1a1a; width: 350px; height: 870px; border: 1px solid black; margin: 15px;
	font-family: Cantarell;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;">
	<h4 style="color: #ffffff; background-color: #656565; text-align: center; margin: 0px; padding: 0px;font-size:20px;">Weekly Rankings</h4>
	<div id="InnerBocks" style="height: 870px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
    <p><font style="color:white;font-size:21px";>Newly Released</font></p>
	<table style="color:white">
	<tr>
	<td align="left"><font style="font-size:18px;">No. 1</font>
	<font style="font-size:18px;text-decoration:underline;"><a href="justiceleague.php">Justice League</a></font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 2</font>
	<font style="font-size:18px;text-decoration:underline;">Ah Boys To Men 4</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 3</font>
	<font style="font-size:18px;text-decoration:underline;">Marvel's Thor: Ragnarok</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 4</font>
	<font style="font-size:18px;text-decoration:underline;">The Promise</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 5</font>
	<font style="font-size:18px;text-decoration:underline;">My Little Pony: The Movie</font></td>
	</tr>
	</table>
	<p><font style="color:white;font-size:21px";>Browsing</font></p>
	<table style="color:white;">
	<tr>
	<td align="left"><font style="font-size:18px;">No. 1</font>
	<font style="font-size:18px;text-decoration:underline;">No Game No Life Zero</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 2</font>
	<font style="font-size:18px;text-decoration:underline;">Victoria And Abdul</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 3</font>
	<font style="font-size:18px;text-decoration:underline;">Tumhari Sulu</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 4</font>
	<font style="font-size:18px;text-decoration:underline;">Coco With Olaf's Frozen...</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 5</font>
	<font style="font-size:18px;text-decoration:underline;">Qarib Qarib Singlle</font></td>
	</tr>
	</table>
	<p><font style="color:white;font-size:21px";>Local favorites</font></p>
	<table style="color:white">
	<tr>
	<td align="left"><font style="font-size:18px;">No. 1</font>
	<font style="font-size:18px;text-decoration:underline;">Before We Forget 当我们在一起</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 2</font>
	<font style="font-size:18px;text-decoration:underline;">Shaadi Mein Zaroor Aana</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 3</font>
	<font style="font-size:18px;text-decoration:underline;">The Mountain Between Us</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 4</font>
	<font style="font-size:18px;text-decoration:underline;">Aramm</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 5</font>
	<font style="font-size:18px;text-decoration:underline;">Ittefaq</font></td>
	</tr>
	</table>
	<p><font style="color:white;font-size:21px";>Halloween Horror</font></p>
	<table style="color:white;">
	<tr>
	<td align="left"><font style="font-size:18px;">No. 1</font>
	<font style="font-size:18px;text-decoration:underline;">IT</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 2</font>
	<font style="font-size:18px;text-decoration:underline;">Happy Death Day</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 3</font>
	<font style="font-size:18px;text-decoration:underline;">It Comes at Night</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 4</font>
	<font style="font-size:18px;text-decoration:underline;">Annabelle: Creation</font></td>
	</tr>
	<tr>
	<td align="left"><font style="font-size:18px;">No. 5</font>
	<font style="font-size:18px;text-decoration:underline;">Rings</font></td>
	</tr>
	</table>
	</div>
  </div>
</div>
<script>



/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
  
</body>
</html>