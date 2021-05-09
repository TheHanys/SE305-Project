<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet" />
	<link href="./css/main.css" rel="stylesheet" />
	<title>Contact us</title>
	<?php
	include "top.php"
	?>
</head>
<style>

.form{
position: relative;
width: 1050px;
height: 850px;
left: 225px;
top: 250px;

background: #FFF9F2;
border-radius: 103px;
z-index: 2;
}
h1{
text-align: center;
width: 1024px;
height: 121px;
left: 208px;
top: 434px;
color:#BF7154;
font-size: 96px;
line-height: 91.2px;
font-family:Rozha One;
font-weight: 400;


}
input[type=text],select, textarea,label{
	position: relative;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;

background: #C4C4C4;
opacity: 0.5;
border-radius: 40px;
font-family:Roboto
}
input[type=submit] {
	position: absolute;
   background-color:#BF7154;
  color: white;
  width: 200px;
 height: 116px;
 left: 420px;
 top: 600px;

  border: none;
  border-radius: 83px;;
  cursor: pointer;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
 font-family: Rozha One;
font-size: 35px;
font-style: normal;
font-weight: 400;
line-height: 46px;
letter-spacing: 0px;
text-align: center;

}
input[type=submit]:hover {
  background-color: grey;
}
.layer{
position: relative;
width: 1191px;
height: 500px;
left: 150px;
top: -750px;

background: #BF7154;
border-radius: 83px;
}

.layernav{
position: relative;
width: 1510px;
height: 170px;
left:0px;
top:-1420px;
background:#FFF9F2;
border-radius: 83px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFF9F2;
}
li {
  float: left;
}
li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: Roboto;
font-size: 23px;
font-style: normal;
font-weight: 200;
line-height: 27px;
letter-spacing: 0px;

}
li a:hover:not(.active) {
  background-color:#BF7154 ;
}

</style>
<body>
	<div class="form">
		<h1>Contact Us</h1>
        <label for="name" style="font-weight: bold;"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
   <br>

     <label for="message" style="font-weight: bold;" >Message</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:250px" ></textarea>
       <input type="submit" value="Submit">
   </div>


   <div class="layer">
   </div>

   <div class ="layernav">

   	<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#Shop">Shop</a></li>
  <li><a href="#contact">Contact Us</a></li>

</ul>
</div>
