<?php
$_SESSION['cart']=array();

class user
{
  public $username ;
  public $password;
  public $email;
  public $phonenumber;
  public $role;
  public $conn;

  function create_connection()
  {
      $this->conn = new mysqli("localhost", "root", "", "stars");
      return $this->conn;
  }
}

class client extends user
{

  function signin($phonenumber,$password)
    {
      $this->create_connection();
      $sql="SELECT * from accounts where phonenumber='$phonenumber'and password='$password'";
      $result=mysqli_query($this->conn,$sql);
      return $result;
    }

    function signup($username,$email,$password,$phonenumber)
{

    $conn=$this->create_connection();
   $sql= "SELECT * FROM accounts where email='$email'";
    $result=mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows >= 1)
    {
      echo "<h2  class='incorrect'>Email already exists</h2>";
    }
    else
    {
   
    $role=1;
    $sql="INSERT INTO accounts (username,email,password,phonenumber,role) values('$username','$email','$password','$phonenumber' ,'$role')";
    $result = mysqli_query($conn,$sql);  
    header("location:home.php");
    return $result;
    }

}

function makeComplaint($usermail,$message,$id){
  $conn=$this->create_connection();
  $sql="INSERT INTO contactus (useremail,message,userid) values ('$usermail','$message','$id')";
  $result = mysqli_query($conn,$sql);
  return $result;
}
  
}


class admin extends user
{

    function signin($username,$password)
    {
      $this->create_connection();
      $sql="SELECT * from accounts where username='$username'and password='$password'";
      $result=mysqli_query($this->conn,$sql);
      return $result;
    }


    function insertproduct($name,$category,$price,$image)
    {
     $this->create_connection();
     $sql="INSERT into products (name,category,price,image) values('$name','$category','$price','$image')";
     $result=mysqli_query($this->conn,$sql);
     return mysqli_insert_id($this->conn);
    }
 

    function deleteproduct($id)
    {
      $this->create_connection();
      $sql = "DELETE FROM products where id = $id";
      $result = mysqli_query($this->conn,$sql);
      return $result;
      if($result)	
      {
          header("Location:manageproducts.php");
      }
      else{
        echo $sql;
      }
    }

    function editproducts($name,$category,$price,$image)
    {
      $this->create_connection();
      $sql = "UPDATE `products` SET `name` = '$name',`category` = '$category', `price` = '$price', `image` = '$image' WHERE
       id='".$_GET['X']."'";
      $result = mysqli_query($this->conn,$sql);
    }

    
    function displayclients()
   {
     $this->create_connection();
     $sql = "SELECT * FROM accounts" ;
     $result=mysqli_query($this->conn,$sql);
     $this->close_connection();
     return $result;
   }

 


}


class products
{
  public $name;
  public $price;
  public $image;
  public $conn;
  function create_connection()
  {
    $this->conn = new mysqli("localhost", "root", "", "stars");
    return $this->conn;
  }

  function viewproducts()
  {
    
    $conn=$this->create_connection();
    $sql="SELECT * from products";
    $result = mysqli_query($conn,$sql);  
    return $result;

  }
  function viewcategory($cat)
  {
    
    $conn=$this->create_connection();
    $sql="SELECT * from products where category = '$cat'";
    $result = mysqli_query($conn,$sql);  
    return $result;

  }
    
}

class orders
{
  function create_connection()
  {
      $this->conn = new mysqli("localhost", "root", "", "stars");
      return $this->conn;
  }
    function checkout($CID,$total)
{
    $conn=$this->create_connection();
    $sql="INSERT INTO orders (CID,Total) values ('$CID','$total')";
    $result = mysqli_query($conn,$sql); 
    $newest_id = mysqli_insert_id($conn);
    return $newest_id;
  

}
function checkout2($oid,$name,$quantity,$price)
{
    $conn=$this->create_connection();
    $sql="INSERT INTO orderedproducts(OID,Product,Quantity,Price) values ('$oid','$name','$quantity','$price')";
    $result=mysqli_query($conn,$sql);
    //header("Location:products.php");

}
function addItem($name,$price,$quantity,$id)
{

    array_push($_SESSION['cart'],array("Product"=>$name,"Price"=>$price,"Quantity"=>$quantity,"ID"=>$id));
    header("Location:cart.php");

}

}