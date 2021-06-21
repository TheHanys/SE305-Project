<?php 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.topnav{
width:100%;
height:140px;
color:black;
background-color: #FFF9F2;
font-size: 10px;
}
.topnav a{
  height:140px;
  color:grey;
  padding-left: 60px;
 padding-bottom: 20px;
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
  padding-left: 150px;
}
.welcometxt{
  color:grey;
  font-size: 20px;
  padding-left: 20px;
  top:-20px;
}
img#cart{
  width:45px;
  height:35px;
  border:none;
  float: center;
}
a#top{
  color:red;
  right:400px;
}
.topnav a#cartlink{
  position: relative;
}
.header{background:rgb(0, 178, 255);color:#fff;}
#lblCartCount {
    font-size: 20px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -20px;
    margin-top:30px;
}
.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
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

<a href= "signout.php" id = "top" style="top: -20px"> Sign Out </a>
<a href="myorders.php"> My orders </a>

    
<span class = "welcometxt">Welcome<?php echo" " . $_SESSION["client"]->username;?></span>

<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search" id = "search">
       <button type="submit"><i class="fa fa-search" style="height:20px;" ></i></button>
</span>
<?php
$counter=0;
foreach($_SESSION['cart'] as $array){
    $counter++;
}
?>
<a href= "cart.php" id = "cartlink"> 
  
<img alt="cart" id ="cart" src="images/cartlogo2.png">
<?php
if(!empty($_SESSION['cart']) )
{
  ?>
<span class='badge badge-warning' id='lblCartCount'> <?php echo $counter ?></span>
<?php
}
?>
</a>

 <?php }else if(!empty($_SESSION['client']) && $_SESSION['client']->role == 0) { 
             ?>
<img id="logo" src ="images/v10_163.png">
<a href= "addproduct.php"> Add Product </a>
<a href= "orders.php"> View Orders</a>
<a href= "manageproducts.php"> Manage products</a>
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