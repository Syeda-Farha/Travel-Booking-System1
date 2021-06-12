<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BOOK MY BUS Phoenix Travels</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body style="background-image:url(xres/images/main-bg.jpg)">
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/mylogo.png" class="logo" style="border-radius:80%" alt="PHOENIX Travels Booking" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="history.php">About</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" <span style="color:black; margin:0 auto; padding:140px 20px 20px 20px; width:820px;"> </span>	
				<div id="contactleft">
					 <b>PHOENIX Travels</b> <br>
(G.V. MAHARASHTRA TRANSPORT, INCORPORATED)<br>
Near Shree Shivaji Collage,Parbhani, Maharashtra, India...<br>
Phone:  +917796703650<br><br>

<b>PHOENIX Travels</b> <br>
(G.V. MAHARASTRA TRANSPORT, INCORPORATED)<br>
Near Shree Shivaji Collage, Parbhani, MAHARASHTRA, India...<br>
MAHARASHTRA Bus Co., India<br>
Phone:  +919096063973<br>
<br><br>


MAHARASHTRA Bus Terminal in Parbhani City by G.V. MAHARASHTRA Transport, Inc.<br>
Location: Vasmat Road, Near Shree Shivaji Collage, Parbhani City, MAHARASHTRA,India<br><br>

Contact Numbers:<br>
PHOENIX Travels Company Parbhani<br>
:- (+91)7796703650, (+91)9096063973 <br>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="" type="text" name="email" />
                        </p>
						<p>
                            <label for="email" class="required label">Mobile:</label><br>
                            <input id="email" class="contactform" placeholder="Example:9999999999" type="text" name="mobile" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" onclick="msg();" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
	<h4> PHOENIX Travels, (+918483888358) &bull; <a href="contact-us.php">  </a></h4>Vasmat Road, Near Shree Shivaji Collage, Parbhani, Maharashtra, India
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/newfooter.png" alt="PHOENIX travels booking" /></a>
	<p>&copy; Copyright 2018 PHOENIX Travels | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
<?php

if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$subject=$_POST['subject'];
	$msg=$_POST['message'];
	include'db.php';
	//$conn=mysql_connect("localhost","root","");
	//$db=mysql_select_db("ticket");
	
	$query=mysql_query("INSERT INTO client_msg(Name,email_add,mobile_num,Subject,msg)VALUES('$name','$email','$mobile','$subject','$msg')");
	
	if($query)
	{
		echo"<script>alert('Message sent Successfully')</script>";
		
	}
	
	else
	{
	echo"<script>alert('Error while Sending')</script>";	
	}
}

?>