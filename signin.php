<?php 
include 'classes.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>

    <div class="main">
                       <a class="back"href="home.php"> <img src="/images/v10_163.png" alt="Logo" style="width:128px;height:128px; position: relative; bottom: 100px; left: 10px;"></a>
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        
                        <h2 class="form-title"style="color:white">Sign in</h2>
                        <div class="form-group">
                            <input type="phone number" class="form-input" name="phonenumber" id="phonenumber" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                    </form>
                    <p class="loginhere"style="color:white">
                        Forget Password? <a href="#" class="loginhere-link"style="color:white">Click here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

   
</body>
</html>
<script>
  
      $("#phonenumber").keypress(function(e) {
      if (String.fromCharCode(e.which).match(/[^0-9_ ]/)) {
        e.preventDefault();
        alert(" You can't enter an alphabet in this field , Use '0-9'.");
       }
     });
   
    </script>
    <?php

if(isset($_POST["submit"]))
{ 
     $_SESSION['client']=new client();
    $result=$_SESSION['client']->signin($_POST['phonenumber'],$_POST['password']); 
    if($row=mysqli_fetch_array($result))    
    {
        
        $_SESSION['client']->id=$row[0];
        $_SESSION['client']->username=$row[1];
        $_SESSION['client']->email=$row[2];
        $_SESSION['client']->password=$row[3];
        $_SESSION['client']->phonenumber=$row[4];
        $_SESSION['client']->id=$row[5];
        $_SESSION['cart']=array();
        header("location:home.php");
    }
    else    
    {

        echo "<h2  class='incorrect'>Incorrect Phone number or Password.</h2>";
    }
}
?>

<?php
ob_end_flush();
?>
