<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet" />
  <title>Contact us</title>
  <?php include "classes.php";
session_start();
include "top.php";?>

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
#labelmsg,#labelname{
  color:#BF7154;
  padding: 25px;

}
#name,#subject,select{
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



</style>
<body>
<form method="post">
  <div class="form">
    <h1>Contact Us</h1>
        <label id="labelname" style="font-weight: bold;"> Email</label>
    <input type="text" id="name" name="email" placeholder="Your email..">
   <br>

     <label id="labelmsg" style="font-weight: bold;" >Message</label>
      <input type="text" id="subject" name="subject" placeholder="Write something.." style="height:250px" ></input>
       <input type="submit" name="Submit" value="Submit">
   </div>


   <div class="layer">
   </div>

</form>
   <?php
if(isset($_POST["Submit"]))
{
  $result = $_SESSION['client']->makeComplaint($_POST['email'],$_POST['subject'],$_SESSION['client']->id);
  if($result){
    header('Location: contactusreply.php');
  }else{
    header('Location: contactus.php');
  }
}
?>
    
