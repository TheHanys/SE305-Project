<?php
class orders extends Model{


   function checkout($CID,$total,$number)
{
    $status = "Pending";
    $sql="INSERT INTO orders (CID,Total,Number,Status,date) values ('$CID','$total','$number','$status',now())";
    $result = $this->db->query($sql); 
    $newest_id = mysqli_insert_id($conn);
    return $newest_id;
}

function checkout2($oid,$name,$quantity,$price)
{
    $sql="INSERT INTO orderedproducts(OID,Product,Quantity,Price) values ('$oid','$name','$quantity','$price')";
    $result = $this->db->query($sql);
}

function addItem($name,$price,$quantity,$id)
{

    array_push($_SESSION['cart'],array("Product"=>$name,"Price"=>$price,"Quantity"=>$quantity,"ID"=>$id));
    header("Location:cart.php");
}
    
    
}
?>