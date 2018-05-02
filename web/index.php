<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-stict.dtd">
<html xmlns="http://www.w3.ord/1999/xhtml" lang="en" xml:lang="en" >
<head>
	<title>This is My Personal Page</title>
	<link rel="stylesheet" type="text/css" href="homepage.css" />
	<script type="text/javascript" src="index.js">
	</script>
</head>
<body>
	<?php
echo "<h3>Today is " . date("Y/m/d")"</h3>";
?>
	<div id="header">
		<h1>Welcome to Bryan's Personal Page</h1>

	</div>

 <div id="family"> 	
    <p class="first">If you would like to go straight to the assignments, I don't blame you! Just <a href="index.html">click here.</a> Otherwise, let me tell you a little bit about myself.
    </p>
</div>

  <div id="hometown">
  	<p>Since you decided to stick around, let me introduce myself. My name is Bryan Lopez and I currently live in Federal Way, WA. I moved up here about 10 years ago.</p>
  </div>
  <p class="first">Here is a family photo that was taken a few years ago. There is nothing more important. <br />
    	<img src="family_photo.jpg" alt="Family Photo" />
    </p>
    <p class="first">I have had the pleasure of going with my family to disneyland last summer. We are planning to visit Hawaii this summer. That's a place I have never been and I'm looking forward to it.</p>
    <p>
    	<img src="disneyland.jpg" alt="Disneyland Family Photo" />
    </p>

    <p class="first">There is nothing better than famiy. Click below for our adventure with high ropes.</p>

    <div id="middle">
       <img src="" id="share">
    	   <button type="button" onclick="sharePicture()" value="Press Me"></button>
    </div>
    <p class="first">
    	I hope you enjoyed my pictures, please proceed to look at my assignments!<br />
    	<a href="index.html">ASSIGNMENTS PAGE</a>
    </p>
  <div id="footer">
  	&copy; 2018, Bryan Lopez 
  </div>
</body>
</html>