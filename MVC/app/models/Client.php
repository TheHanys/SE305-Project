<?php
class Client extends Model
{
  private $id;
  private $username ;
  private $password;
  private $email;
  private $phonenumber;
  private $role;
  private $address;
  private $city;
  private $sQuestion;
  private $sAnswer;


  function __construct($id=""){
    parent::__construct();
    if ($id!="") {
      $sql="SELECT * from accounts where phonenumber='$phonenumber'and password='$password'";
      $result = $this->db->query($sql);
      if ($result->num_rows == 1){
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

  function signup($username,$email,$password,$phonenumber,$address,$city,$question,$answer)
{

   $sql= "SELECT * FROM accounts where email='$email'";
    $num_rows = mysqli_num_rows($result);
    $role=1;
    $sql="INSERT INTO accounts (username,email,password,phonenumber,role,address,city,sQuestion,sAnswer) values('$username','$email','$password','$phonenumber' ,'$role','$address','$city','$question','$answer')";
      $result = $this->db->query($sql);
     if($result==false){

 return "phonenumber already exists";
    }
    else return false;

  }
}
 function editprofile($username,$email,$password,$phonenumber,$address,$city,$question,$answer)){
        $sql = "UPDATE client SET username = '$username', email = '$email', password = '$password', phonenumber = '$phonenumber', address = '$address',city='city',question='$question',answer='$answer' WHERE phonenumber = '$phonenumber'";
        $this->db->query($sql);
      }

  function myOrders($id)
{
  $this->create_connection();
  $sql="SELECT * from orders WHERE CID='$id'";
     $result = $this->db->query($sql);
      return $result;
}

function verify($password,$phonenumber)
    {
      $sql="SELECT password from accounts where phonenumber='$phonenumber'";
      $result = $this->db->query($sql);
     $row = $result1->fetch_assoc();
      $hash = $row['password'];    
     password_verify($password, $hash);
      return $result1;
    }


}
?>
