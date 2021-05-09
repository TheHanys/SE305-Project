<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Sign Up here</title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 id="create" class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="phone number" class="form-input" name="phonenumber" id="phonenumber" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" checked="checked" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="https://www.termsfeed.com/live/471266b5-2f7c-469c-93be-84f39705d98f" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="http://localhost/signin.php" class="loginhere-link">Login here</a>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<script>
     $("#phonenumber").keypress(function(e) {
      if (String.fromCharCode(e.which).match(/[^0-9_ ]/)) {
        e.preventDefault();
        alert(" You can't enter an alphabet in this field , Use '0-9'.");
       }
     });
  
     $("#username").keypress(function(e) {
      if (String.fromCharCode(e.which).match(/[^A-Za-z]/)) {
        e.preventDefault();
        alert("Special characters and numbers are not allowed in this field. Use 'A-Z', 'a-z'");
       }
     });
   
    </script>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stars";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["submit"]))
{

  $invalid=true;
  if(strlen($_POST["password"])<8)
  {
    $invalid=false;
  }
  else 
  {
    $checkUpper=true;
    for($i=0;$i<strlen($_POST["password"]);$i++)
    {
      if(ctype_upper($_POST['password'][$i]))
      {
        $checkUpper=false;
      }   
    }
  
    $checkNumeric=true;
    for($i=0;$i<strlen($_POST["password"]);$i++)
    {
      if(is_numeric($_POST['password'][$i]))
      {
        $checkNumeric=false;
      }
    }
  
    $checkSpecial=true;
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"]))
    {
      $checkSpecial=false;
    }
    if($checkSpecial==true||$checkNumeric==true||$checkUpper==true)
    {
      $invalid=false;
    }
  }
  
  if(empty($_POST['email'])||empty($_POST['password'])||empty($_POST['username']))
  {
   echo "<h2>*Missing fields</h2>";
  }
  else
  {
    $sql= "SELECT * FROM accounts where email='".$_POST["email"]."'";

    $result=mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1)
    {
      echo "<h2>*Email already exists</h2>"; 
    }
   
    else if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
      if($invalid==true)
      {
        
          
        $sql="INSERT INTO accounts (username,email,password,phonenumber) values('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["phonenumber"]."')";
          $result=mysqli_query($conn,$sql);
        header("location:home.php");
    
          
      } 
      else 
      {
        echo "<h2>*Password should be atleast 8 chars in length & should contain atleast 1 uppercase letter , 1 number , and one special char </h2>";
      }
    }
    else
    {
      echo "<h2>*Email isn't in the correct format</h2>";
    } 
  }
}
?>  
<?php
ob_end_flush();
?>