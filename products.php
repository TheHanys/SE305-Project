
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <?php include "top.php";?>

<style>
	.topnav{
width:100%;
		height:100px;
color:black;
background-color: #FFF9F2;
font-size: 30px;
 
}
.toptext{
	font-family: copperplate;
	font-size:40px;
	font-weight:bold;
	padding-left:650px;
	color:#BF7154;
   text-decoration: underline;

}
.sidenav{
	margin-top: -1%;
	position: absolute;
    height:auto;
    width:150px;
    font-size: 20px;
    font-weight: bold;

}
.sidetxt{
color:#BF7154;
  padding-bottom: 30px;
  font-weight: lighter;
}
.btnAddAction
{
background-color: #C4C4C4;
border: 2px solid #FFF9F2;
}


img{
	width:300px;
	height:300px;
	object-fit: cover;
	 border: 3px solid #BF7154;
}
	
</style>
<header>
	</header>
<p class = "topnav"> </p>
<p class = "toptext"> All products  </p>
<div class = "sidenav">
<p> Product categories </p> <br>
<p class = "sidetxt"> -Sun glasses </p>
<p class = "sidetxt"> -Women bags </p>
<p class = "sidetxt"> -Wallets </p>
<p class = "sidetxt"> -Accessories </p>
</div>

<?php
ob_start();
include "classes.php";
session_start();


$_SESSION['products']=new products();
$_SESSION['orders']=new orders();
$result =$_SESSION['products']->viewproducts();
  
while($row=mysqli_fetch_array($result)) 
{
       
          $_SESSION['products']->id=$row[0];
          $_SESSION['products']->name=$row[1];
          $_SESSION['products']->price=$row[2];
          $_SESSION['products']->image=$row[3];
?>

       <div class="container" >  
       	<div class ="row">
       		<div class ="col-md-4" style="border-right-style: inset; border-color:#BF7154;">
       			<form method="post">
                     <img src=<?php echo ($_SESSION['products']->image) ?>  >
                     <h5> Name : <?php echo ($_SESSION['products']->name)?> </h5>
                      <h5> Price : <?php echo ($_SESSION['products']->price)?> EGP </h5>
                      <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="4" />   <span><input type="submit" class="new" value="Add to cart" class="home-addtocart" name="addtocart" id="addtocart"></button></span><br> </div>
                  </form>
                     </div>
             
          
              <?php
 } 

 ?>
 </div>
  </div>
  <?php
  if(isset($_POST["addtocart"])){
    echo $_SESSION['products']->name;

$quantity=$_POST['quantity'];
   
    $_SESSION['orders']->addItem($_SESSION['products']->name,$_SESSION['products']->price,$quantity,$_SESSION['products']->id);
    
  }
  ?>

<?php
 ob_end_flush(); 
 
?>
