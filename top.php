<?php 
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  padding-left: 25px;
  font-size: 20px;
  text-decoration:none;
}
.searchbar input[type="text"] { 
  float: top;
  font-size: 20px;
  border-color: black;
  height: 30px;
  width: 200px;
}
#logo{
height:130px;
width:130px;
border: none;
}
.searchbar{
  position: absolute;
  left: 83%;
  top:7%;
}
.welcometxt{
  color:grey;
  font-size: 20px;
  padding-left: 20px
}
#sign{
  position: absolute;
  top: 1.5%;
  left: 83%;
}

</style>
<body>

<form action=" ">
<div class ="topnav">
<a href="home.php">
<img id="logo" src ="images/v10_163.png">
</a>
<?php if(!empty($_SESSION['client']) && $_SESSION['client']->role == 1) { 
             ?>             
<a href= "home.php"> Home </a>
<a href= "products.php"> Shop</a>
<a href= "contactus.php"> Contact us </a>
<span id ="sign">
<span class = welcometxt >Welcome <?php echo $_SESSION["client"]->username;?></span>
<a href= "signout.php"> Sign Out </a>
</span>

<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
</span>
</div>
 <?php }else if(!empty($_SESSION['client']) && $_SESSION['client']->role == 0) { 
             ?>

<a href= "addproduct.php"> Add Products </a>
<a href= "manageproducts.php"> Manage Products </a>
<a href= "orders.php"> View Orders</a>
<a href= "replies.php"> Complaints Reply</a>
<span id ="sign">
<span class = welcometxt >Welcome <?php echo $_SESSION["client"]->username;?></span>
<a href= "signout.php"> Sign Out </a>
</span>

<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
 </span>
 <?php }else{?>
<a href= "home.php"> Home </a>
<a href= "products.php"> Shop</a>
<a href= "contactus.php"> Contact us </a>

<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search"></i></button>
       </span>
<span id ="sign">
       <a href="signin.php">Sign In</a>
       <a href="signup.php">Sign Up</a>
 </span>
 <?php } ?>
  </div>
 </form>
	</body>