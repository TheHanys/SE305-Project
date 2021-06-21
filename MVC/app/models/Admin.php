<?php
class admin extends Model{
    public $id,$first_name,$last_name,$identification_no ,$nationality, $mobile, $email, $company;
    function __construct($id=""){
      parent::__construct();
      if ($id!="") {
        $sql="select * from accounts where phonenumber=$phonenumber";
        $result = $this->db->query($sql);
        $row = $this->db->fetchRow();
        $this->username = $row['username'];
        $this->password = $row['password'];
        $this->email = $row['email'];
        $this->phonenumber = $row['phonenumber'];
        $this->role = $row['role'];
        $this->address = $row['address'];
        $this->question = $row['question'];
        $this->answer = $row['answer'];
      }
    }

      function signin($username, $password){
    $sql="SELECT * from accounts where phonenumber='$phonenumber'and password='$password'";
    $result = $this->db->query($sql);

   if (password_verify($password, $row['password']))
   {
      $this->id = $row['ID'];
      $_SESSION['username'] = $row['username'];
      header('Location: home.php');
      return true;
        }
  }
    else {
      return false;
     }
  }

      function insertproducts($name,$category,$price,$image){
         $sql="INSERT into products (name,category,price,image) values('$name','$category','$price','$image')";
        $result = $this->db->query($sql);
      }


      function deleteproduct($id){
        $sql = "DELETE FROM products where id = $id";
        $this->db->query($sql);
        return $result;
      if($result) 
        {
          header("Location:manageproducts.php");
        }
      }
      function editproducts($name,$category,$price,$image){
       $sql = "UPDATE `products` SET `name` = '$name',`category` = '$category', `price` = '$price', `image` = '$image' WHERE
       id='".$_GET['X']."'";
        $this->db->query($sql);
      }

      function displayclients(){
        $clients = array();
        $sql = "SELECT phonenumber FROM accounts";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0){
          while($row = $this->db->fetchRow()){
            array_push($accounts,new account($row['phonenumber']));
          }
          return $accounts;
        }
        else {
          return null;
        }
      }

       function changestatus($id)
      {
        $status = "Shipped";
        $sql = "UPDATE `orders` SET `status` = '$status' WHERE id='$id'";
        $this->db->query($sql);
      }
 function changelatestproducts(){
    $sql = "SELECT * FROM products ORDER BY ID DESC";
    $result = $this->db->query($sql);
    return $result;
  }


}