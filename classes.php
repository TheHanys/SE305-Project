<?php

abstract class User
{
  public $username , $password, $email, $phonenumber,$role;
  public $conn;
  function create_connection(){
      $this->conn = new mysqli("localhost", "root", "", "stars");
}

abstract class products
{
  public $name , $price, $image;
  public $conn;
  function create_connection(){
      $this->conn = new mysqli("localhost", "root", "", "stars");
}

}
class admin extends User
{

    function login($username,$password)
    {
      $this->create_connection();
      $sql="SELECT * from accounts where username='$username'and password='$password'";
      $result=mysqli_query($this->conn,$sql);
      return $result;
    }


   function insertproduct($name,$price,$image)
   {
    $this->create_connection();
    $sql="INSERT into products (name,price,image) values('$this->name','$this->price','$this->image')";
    $result=mysqli_query($this->conn,$sql);
    $this->close_connection();
    return mysqli_insert_id($this->conn);
   }

    function deleteproduct($name)
    {
      $this->create_connection();
      $sql = "DELETE FROM products WHERE name = $name ";
      $result = mysqli_query($this->conn,$sql);
    }

    function editproducts($name)
    {
      $this->create_connection();
      $sql = "UPDATE FROM products WHERE name = $name values('$this->name','$this->price','$this->image')";
      $result = mysqli_query($this->conn,$sql);
    }

    
    function displayclients()
   {
     $this->create_connection();
     $sql = "SELECT * FROM accounts WHERE role = "1"";
     $result=mysqli_query($this->conn,$sql);
     $this->close_connection();
     return $result;
   }

 


}

class client extends user
{

  function login($username,$password)
    {
      $this->create_connection();
      $sql="SELECT * from accounts where username='$username'and password='$password'";
      $result=mysqli_query($this->conn,$sql);
      return $result;
    }


    function addtocart ($name)
    {
    	$this->create_connection();
      $sql="SELECT * from products where name='$name'";
      $result=mysqli_query($this->conn,$sql);
      return $result;
    }
}











