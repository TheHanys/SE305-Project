 <?php
class Clientcontroller extends Controller{


public function signin(){
    $phonenumber=$_REQUEST['phonenumber'];
    $password=$_REQUEST['password'];
    $this->model->signin($phonenumber,$password);
}

public function signup(){
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $phonenumber=$_REQUEST['phonenumber'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $question=$_REQUEST['question'];
    $answer=$_REQUEST['answer'];
    $this->model->signup($username,$email,$password,$phonenumber,$address,$city,$question,$answer);
}

public function editproile(){
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $phonenumber=$_REQUEST['phonenumber'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $question=$_REQUEST['question'];
    $answer=$_REQUEST['answer'];
    $this->model->editproile($username,$email,$password,$phonenumber,$address,$city,$question,$answer);
}

public function myorders(){
    $id=$_REQUEST['id'];
    $this->model->myorders($id);
}

public function verify(){
    $password=$_REQUEST['password'];
    $phonenumber=$_REQUEST['phonenumber'];
    $this->model->verify($password,$phonenumber);
}



}
?>