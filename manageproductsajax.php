<style>
table,th,td,tr{
  border:1px solid black;
  position:relative;
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

</style>
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
<?php
ob_start();
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stars";

$conn = new mysqli($servername, $username, $password, $dbname);
 $sql="SELECT * FROM products where name LIKE '%".$_POST['search']."%'";  
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
          </div>
</div>   
</div> 