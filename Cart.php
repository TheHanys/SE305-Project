<style>
        body{
            overflow-x:hidden;
            overflow-y:hidden;
            background-color:rgba(191,113,84,0.1);
        }
        table,th,td,tr{
            border:1px solid #e3d18a; 
         }
        th,td{
            padding: 25px;
            text-align: left;
        }
        th{
            background-color: #bf7154;
            color: white;
        }
        .counter{
            color:#e3d18a;
        }
        .sub,.total{
            color:#e3d18a;
        }

        table{
            width: 38%;
            position: relative;
            left:130px;
        }
        .cart-total{
            position: relative;
            left:135px;
        }
        .checkout{
            width:220px;
            height:50px;
            border:1px solid #e3d18a;
            border-radius:15px;
            background-color: #bf7154;
            cursor: pointer;
            position:relative;
            left:200px;
            margin-top:20px;
        }
        .checkout:hover{
            background-color:rgba(191,113,84,0.8);
            color:white; 
        }
        .checkouts{
            width:220px;
            height:50px;
            border:1px solid #e3d18a;
            border-radius:15px;
            background-color: #bf7154;
            cursor: pointer;
            position:relative;
            left:320px;
            top: 20px;
            margin-top:20px;
        }
        .checkouts:hover{
            background-color:rgba(191,113,84,0.8);
            color:white; 
        }
        .cart{
            position: relative;
            left:350px;
        }
        .cart-heading{
            position: relative;
            left:170px;
            color:#433520;
        }
    </style>

<?php
ob_start();
include 'classes.php'; 
session_start();
include "top.php";

$counter=0;
foreach($_SESSION['cart'] as $array){
    $counter++;
}

?>
 <div class="cart">
             <h1 class="cart-heading">You have <span class="counter"><?php echo $counter?></span> products in your cart</h1><br>
                <table class="cart-items">
                    <thead>
                        <tr>
                            <th>Product </th>
                            <th>Price </th>
                            <th>Quantity </th>    
                            <th>Subtotal </th>
                            <th>Select</th>
                        
                        </tr>
                    </thead>
                    <?php 
                     $sum=0;
                     $item=0;
                     ?>
                     <form action="" method="post">
                     <?php
                        foreach($_SESSION['cart'] as $array){
                    ?>
                <tr>
                    <td><?php echo $array['Product']."<br />";?></td>
                    <td><?php echo $array['Price']."<br />";?></td>
                    <td><?php echo $array['Quantity']."<br />";?></td>
                    <?php $total=$array['Price']*$array['Quantity'];
                    ?>
                    <td><?php echo $total; echo " EGP";
                    $sum=$sum+$total;
                    ?></td>
                    <td><input type="checkbox" value="<?php echo $item; ?>" name="check[ ]"></td>
                </tr>
            <?php
            $item++;
        }

  ?>
 </table>

 <input type="submit"  name="delete" class="checkouts" value="Remove item(s)">
 </form><br>
   <br>
                <table class="cart-total"><br>
                   <br>
                   <form action="" method="post">
                    <tr>
                        <th>Total</th>
                        <td class="total"><?php echo $sum; echo " EGP"?></td>
                    </tr>
                </table>
            
                <input type="submit"  name="submit" class="checkout" value="Check Out">
                <input type="submit"  name="reset" class="checkout" value="Reset">
                </form>
            </div> 
        </div>
        </div>
            </div>
  </body>
</html>
<?php

if(isset($_POST["submit"])){
  echo $_SESSION['client']->id;
   $newest_id= $_SESSION['orders']->checkout($_SESSION['client']->id,$sum);
   foreach($_SESSION['cart'] as $array){
       $_SESSION['orders']->checkout2( $newest_id,$array['Product'],$array['Quantity'],$array['Price']);
      
   

}

   $_SESSION['cart']=array(); 


}
if(isset($_POST["delete"])){
 
    
 for ($i=0; $i<=count($_POST['check']);$i++) { 
     $remove_id=$_POST['check']["$i"];
     array_splice($_SESSION["cart"], $remove_id, 1);

 }
 header("Location:cart.php");
}
if(isset($_POST["reset"])){
 $_SESSION['cart']=array();
 header("Location:cart.php");
}

?>
<?php
ob_end_flush();
?>
