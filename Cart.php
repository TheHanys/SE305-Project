<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet" />
  <link href="./css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Cart</title>
  <?php
  include "top.php"
  ?>
</head>
<style>
  .layer{
position: relative;
width: 1050px;
height: 1050px;
left: 225px;
top: 150px;

background: #FFF9F2;
border-radius: 103px;
z-index: 3;
}
.layer1{
position: relative;
width: 1191px;
height: 500px;
left: 150px;
top: -750px;

background: #BF7154;
border-radius: 83px;
z-index:2;
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
.container1{
position: absolute;
width: 385.02px;
height: 400px;
left: 258px;
top: 500px;

background: #FFFFFF;
border: 1px solid #BF7154;
box-sizing: border-box;
box-shadow: -2px 5px 6px rgba(0, 0, 0, 0.3);
z-index: 3;

}
.container2{
position: absolute;
width: 385.02px;
height: 400px;
left: 850px;
top: 500px;

background: #FFFFFF;
border: 1px solid #BF7154;
box-sizing: border-box;
box-shadow: -2px 5px 6px rgba(0, 0, 0, 0.3);
z-index: 4;
}
input[type=submit] {
  position: absolute;
   background-color:#BF7154;
  color: white;
  width: 250px;
 height: 116px;
 left: 625px;
 top: 1150px;

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
z-index: 5;
}
input[type=submit]:hover {
  background-color: grey;
}
.layer3{
  position: absolute;
   background-color:#BF7154;
  color: white;
  width: 450px;
 height: 116px;
 left: 530px;
 top: 950px;
 border: none;
  border-radius: 83px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
 font-family: Rozha One;
font-size: 35px;
font-style: normal;
font-weight: 400;
line-height: 46px;
letter-spacing: 0px;
text-align: center;
z-index: 6;
}

</style>
<body>
  <div class="layer">
    <h1>Shopping Cart</h1>
</div>

 <div class="layer1">
   </div>
   <div class="container1">

    <img src=images/carmeny.png height="250" width="383px">
  <p style="font-family:Rozha One" style="font-size:32">&nbsp;CarmenyKarine</p>

  <p style="font-family: Roboto"> &nbsp; 400EGP</p>


    </div>
   <div class="container2">
    <img src=images/one.png height="250" width="383px">
    <p style="font-family:Rozha One" >&nbsp;Calvin Klein One</p>

  <p style="font-family: Roboto"> &nbsp; 500EGP</p>


   </div>
<input type="submit" value="Check Out">
<div class="layer3">
  <p>Total:900EGP</p>
