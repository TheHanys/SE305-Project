<link rel ="stylesheet" href="products.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
  <form action=" ">
<div class ="topnav">
<img id="logo" src ="v10_163.png">
<a href= "home.php"> Home </a>
<a href= "shop.php"> Shop </a>
<a href= "contact.php"> Contact us </a>
<span class = "searchbar">
      <input type="text" placeholder="Search.." name="search">
       <button type="submit"><i class="fa fa-search"></i></button>
 </span>
  </div>
  </form>
<p class = "toptext"> All products  </p>
<div class = "sidenav">
<p> Product categories </p> <br>
<p class = "sidetxt"> -Sun glasses </p>
<p class = "sidetxt"> -Women bags </p>
<p class = "sidetxt"> -Wallets </p>
<p class = "sidetxt"> -Accessories </p>
</div>

<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stars";
            
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from products";
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
           
              $ID=$row[0];
              $Name=$row[1];
              $Price=$row[2];
              $Image=$row[3];
    ?>

       <div class="container" >  
       	<div class ="row">
       		<div class ="col-md-4" style="border-right-style: inset; border-color:#BF7154;">
       			<form method="post">
                     <img src=<?php echo ($Image); ?>  >
                     <h5 id ="name"> Name : <?php echo ($Name)?> </h5>
                      <h5 id="price"> Price : <?php echo ($Price)?> EGP </h5>
                      <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="4" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                  </form>
                     </div>
             
          
              <?php
 } 

 ?>
 </div>
  </div>
</body>