<?php
class Prodcutscontroller extends Controller{


public function checkout()
{
    $CID=$_REQUEST['CID'];
    $total=$_REQUEST['total'];
	$number=$_REQUEST['number'];
    $this->model->checkout(CID, total,number);
}

public function checkout2()
{
    $OID=$_REQUEST['OID'];
    $name=$_REQUEST['name'];
	$quantity=$_REQUEST['quantity'];
	$price=$_REQUEST['price'];
    $this->model->checkout2($oid,$name,$quantity,$price);
}

public function additem()
{

    $name=$_REQUEST['name'];
	$price=$_REQUEST['price'];
	$quantity=$_REQUEST['quantity'];
	$id=$_REQUEST['id'];
    $this->model->additem($name,$price,$quantity,$id);
}

}
?>