<style>
table,th,td,tr{
  border:1px solid #e3d18a;
  position:relative;
}
th,td{
  padding: 15px;
  text-align: left;
}
th{
  background-color: #BF7154;
  color: white;
}
table{
  width: 50%;
  position:relative;
  left:400px;
  top:10px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
  <table>
    <tr>
      <th>Order ID</th>
      <th>Email</th>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Amount</th>
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
 $sql="SELECT * FROM orders where ID LIKE '%".$_POST['search2']."%'";
  $result = mysqli_query($conn,$sql); 

while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo" <td>$row[0]</td>";
echo" <td>$row[1]</td>";
$id=$row[0];
$sql="SELECT Product from orderedproducts WHERE OID='$id'";
$result2 = mysqli_query($conn,$sql);  
echo "<td>";
while($row2=mysqli_fetch_array($result2)){
  echo"$row2[0]";
 echo "<br>";


} 
echo "</td>";
echo "</td>";
$sql="SELECT Quantity from orderedproducts WHERE OID='$id'";
$result3 = mysqli_query($conn,$sql);  
echo "<td>";
while($row2=mysqli_fetch_array($result3)){
  echo"$row2[0]";
 echo "<br>";


} 
echo "</td>";
$sql="SELECT Price from orderedproducts WHERE OID='$id'";
$result3 = mysqli_query($conn,$sql);  
echo "<td>";
while($row2=mysqli_fetch_array($result3)){
  echo"$row2[0]";
  echo "<br>";



} 
echo "</td>";
echo"<td>$row[2]</td>";
?>

<?php 
echo"</tr>";
}
echo"</table>";
?>
