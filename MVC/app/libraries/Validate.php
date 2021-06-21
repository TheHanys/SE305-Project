<?php
function Emailvalidation($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
return "invalid email";

    }
    else if($email==""){
        return "Please enter your E-mail!";
    }
    else{
return false;
    }
}
 function Passwordvalidation($password){
    $checkNumeric=true;
    $checkSpecial=true;
    $checkEmpty=true;
    for($i=0;$i<strlen($password);$i++)
    {
      if(is_numeric($password[$i]))
      {
        $checkNumeric=false;
      }
    }
  
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
        {
          $checkSpecial=false;
         
        }
        if($password!=""){
            $checkEmpty=false;
        }
        if($checkNumeric==true||$checkSpecial==true||$checkEmpty==true){
            return "Password should be atleast 8 chars in length & should contain <br> atleast 1 uppercase letter , 1 number , and one special char";


        }
        else return false;


}
 function username validation($name){
    if($name==""){
        return "Please enter your name";
        
        }
        $checkNumeric=true;
   
        
        for($i=0;$i<strlen($name);$i++)
            {
              if(is_numeric($name[$i]))
              {
                $checkNumeric=false;
              }
            }
            if($checkNumeric==false){
      return "Names cannot contain numbers";
        
            }

else return false;

}


 function Phonenumbervalidation($phonenumber){
     
if(strlen($phonenumber)!=11){
return "Phone number must be 11 digits";

}
     else if($phonenumber==""){
        return "Please enter your phonenumber";
    }
    else return false;
}

}
function Usernamevalidation($username){

    if(preg_match('/^[a-zA-Z0-9]+/', $username)){
        return "";

    }
    else return "Username cannot contain any special charchters";
}

?>