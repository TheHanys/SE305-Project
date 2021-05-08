<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Sign In</title>


    <!-- css -->
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>

    <div class="main">

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
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stars";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["submit"]))
{ 
    
     $sql="SELECT * from accounts where phonenumber='".$_POST["phonenumber"]."'and password='".$_POST["password"]."'";
    
    $result = mysqli_query($conn,$sql); 
    if($row=mysqli_fetch_array($result))    
    {
        
        $_SESSION["id"]=$row["id"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["email"]=$row["Email"];
        $_SESSION["password"]=$row["password"];
        $_SESSION["phonenumber"]=$row["phonenumber"];
        header("Location:signup.php");
    }
    else    
    {
        echo "<h2>*Incorrect Phone number or Password.</h2>";
    }
}
?>

<?php
ob_end_flush();
?>
