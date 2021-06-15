<?php
include "classes.php";
session_start();
include 'top.php';?>
<head>
<style>
table,th,td,tr{
  border:1px solid black;
}
th,td{
  padding: 15px;
  text-align: left;
}
th{
  background-color: grey;
  color: white;
}
table{
  width: 100%;
  position:relative;
  
}
h3{
  text-align:center

}

h5{
       color:red;
       font-size:15x;

}
.details{
       font-size:20px;
}
.actions{
       color:red;
       
}
.button{
  position: relative;
  bottom: 35px;
  font-size: 1.25em;
  font-weight: 700;
  color: rgb(121, 117, 117);
  background-color: white;
  display: inline-block;
  cursor: pointer;
  border: 1px solid white;
  top:10px;
}

.button:focus,
.button:hover{
  background-color: rgb(121, 117, 117);
}
</style>
</head>

<body>
<div class="container">
  <div class="row"> 
    <div class="col-lg">
  <table id="mytable">
    <tr>
      <th>Product Name</th>
      <th>Price</th> 
      <th>Image</th>
      <th>Category</th>
      <th>Edit</th>
       <th>Delete</th>
    </tr>

</body>               

<form action="addproduct.php">
    <input type="submit" class="submit button btn w-100 py-3" value="Add a new product" /><br>
</form><br>
<h3><input type = 'text' name = 'search' id='search' placeholder="By product name" onkeyup='validate()'></h3>
<h3>Products</h3>
<div id ='msg'></div>

   
<?php
  
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "stars";
              
       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
       $sql="SELECT * from products";
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
              $ID=$row[0];
              $Name=$row[1];
              $Price=$row[2];
              $Image=$row[3];              
              $Category=$row[4];            
              echo"<tr>";
              echo" <td>$Name</td>";
              echo" <td>$Price</td>";
              echo" <td>$Category</td>";
              
              
              ?>
             <td> <img src="<?php echo $Image;?>" width=50px> </td>
              
             <td><span><a class="actions"href = "editproduct.php?X=<?php echo $row[0]; ?>">Edit</a></span></td>            
              <td><span><a class="actions"href = "deleteproduct.php?X=<?php echo $row[0]; ?>">Delete</a></span></td>
          
             <?php 
              echo"</tr>";
            
            }
            echo"</table>";
          
            ?>
           
          </form>

      


          <script>
function validate(){

  var Table = document.getElementById("mytable");
Table.innerHTML = "";
    jQuery.ajax(
{
    url: 'manageproductsajax.php',
    data:'search='+$("#search").val() ,
    type: "POST",
    success:function(data){
$("#msg").html(data);
        }
        
        
});

}

</script>
<?php

 ob_end_flush(); 
?>
 </div>
</div>   
</div> 