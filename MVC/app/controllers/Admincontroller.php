<?php
class Admincontroller extends Controller{


public function signin(){
    $phonenumber=$_REQUEST['phonenumber'];
    $password=$_REQUEST['password'];
    $this->model->signin($phonenumber,$password);
}



public function insertproducts(){
    $name=$_REQUEST['name'];
    $category=$_REQUEST['price'];
    $price=$_REQUEST['category'];
    $image=$_REQUEST['image'];
    $this->model->insertproducts($name,$category,$price,$image);
}

public function deleteproducts(){
    $id=$_REQUEST['id'];
    $this->model->deleteproducts($id);
}

public function editproducts(){
    $name=$_REQUEST['name'];
    $category=$_REQUEST['price'];
    $price=$_REQUEST['category'];
    $image=$_REQUEST['image'];
    $this->model->editproducts($name,$category,$price,$image);
}

public function displayclients(){
    $this->model->displayclients();
}

public function changestatus(){
    $id=$_REQUEST['id'];
    $this->model->changestatus($id);
}
 
public function changelatestproducts(){
    $this->model->changelatestproducts();
}

}
?>