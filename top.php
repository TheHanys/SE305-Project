<?php 
?>
<link rel ="stylesheet" href="products.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.topnav{
width:100%;
height:130px;
color:black;
background-color: #FFF9F2;
font-size: 10px;
 
}
.topnav a{
  color:grey;
  padding-left: 60px;
  font-size: 20px;
}
.searchbar input[type="text"] { 
  float: top;
  padding-left: 5px;
  margin-top: 0px;
  margin-right: 0px;
  font-size: 20px;
  border-color: black;
}
img#logo{
height:130px;
width:130px;
border: none;
}
.searchbar{
  padding-left: 500px;
}
.welcometxt{
  color:grey;
  font-size: 20px;
  padding-left: 20px
}
</style>
<body>
<form action=" ">
<div class ="topnav">
<?php if(!empty($_SESSION['client']) && $_SESSION['client']->role == 1) { 
             ?>
<img id="logo" src ="images/v10_163.png">
<a href= "home.php"> Home </a>
<a href= "products.php"> Shop</a>
<a href= "contactus.php"> Contact us </a>
<a href= "signout.php"> Sign Out </a>
<span class = "welcometxt">Welcome<?php echo" " . $_SESSION["client"]->username;?></span>

<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
</span>
 <?php }else if(!empty($_SESSION['client']) && $_SESSION['client']->role == 0) { 
             ?>
<img id="logo" src ="images/v10_163.png">
<a href= "addproduct.php"> Add Product </a>
<a href= "viewusers.php"> View Users</a>
<a href= "replies.php"> Complaints Reply</a>
<a href= "signout.php"> Sign Out </a>
<span class = welcometxt >Welcome <?php echo $_SESSION["client"]->username;?></span>
<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
 </span>
 <?php }else{?>
  <img id="logo" src ="images/v10_163.png">
<a href= "home.php"> Home </a>
<a href= "products.php"> Shop</a>
<a href= "contactus.php"> Contact us </a>
<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
       <a href="signin.php">Sign In</a>
    <a  href="signup.php">Sign Up</a>
 </span>
 <?php } ?>
  </div>
 </form>
	</body>