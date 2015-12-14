<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript" src="validation.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<div id="header">
	<h1 id="title">
	Assg.1: CSS, JavaScript, and Forms
	<div id="picbox"><img id="picture" src="http://meemlabs.com/images/small/jquery-logo.jpg"></div>
	<script>$(document).ready(function(){
    $("#picbox").mouseenter(function(){
        alert("Why are you hovering?");
    });
});</script>
</h1>
	<h2 id="author">Brought to you by Fouad Makdissy</h2>
</div>

<div id="section" class="bb">
	<ul id="menu">
		<li><div class="dropdown">
  <button id="home" onclick="home()">Home</button></li><br>
		<li><div class="dropdown">
  <button id="aboutme" onclick="aboutMe()">About me</button></li><br>

		<li><div class="dropdown">
  <button class="dropbtn">Courses</button>
  <div class="dropdown-content">
    <a href="http://vlsi.byblos.lau.edu.lb/classes/csc443/csc443.html">CSC 443</a>
    <a href="http://vlsi.byblos.lau.edu.lb/classes/csc375/csc375.html">CSC 375</a>
  </div>
</div></li><br>


		<li><button id="addguest" onclick="addGuest()">Add Guest</button></li><br>
		<li><button id="viewguests" onclick="viewGuests()">View Guests</button></li></ul>
		
		
		<button id="redbtn">Red</button>
		<button id="yellowbtn">Yellow</button>
		<button id="greenbtn">Green</button>
		<button id="blackbtn">Black</button>
		<button id="silverbtn">Silver</button>
		<script>
		$("#redbtn").click(function(){$("body").css({"backgroundColor": "red"});});
		$("#yellowbtn").click(function(){$("body").css({"backgroundColor": "yellow"});});
		$("#greenbtn").click(function(){$("body").css({"backgroundColor": "green"});});
		$("#blackbtn").click(function(){$("body").css({"backgroundColor": "black"});});
		$("#silverbtn").click(function(){$("body").css({"backgroundColor": "silver"});});
</script>
<a href="" id="clickme">Click Me!</a>
<script>$("#clickme").click(function(){$("a").attr("href", randomGenerator());});</script>


	
</div>

<div id="section1">
<h3>Click any button in the sidebar to begin.</h3>
</div>

<div id="footer">
<h3>CSC443 Fall 2015</h3>
</div>

<script type="text/javascript">

</script>
</body>
</html>
