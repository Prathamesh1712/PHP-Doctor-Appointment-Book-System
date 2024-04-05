<?php
session_start();
?>
<html>
<style>
table {
    font-family: comic sans ms;
    border-collapse: collapse;
    width: 75%;
}

td, th {
    border: 2px solid DodgerBlue;
    text-align: center;
    padding: 8px;
    color:orange;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
</html>
<?php
include_once 'database.php';
$a=$_SESSION['username'];
$result = mysqli_query($conn,"SELECT * FROM regp where username=' ".$a. " ' ");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<center>
<br><br>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td><h3>First Name</h3></td>
    <td><h3>Last Name</h3></td>
    <td><h3>Address</h3></td>
    <td><h3>Gender</h3></td>
<td><h3>Blood Group</h3></td>
<td><h3>Mobile Number</h3></td>
<td><h3>Email As Username</h3></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
    <td><?php echo $row["adde"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["bg"]; ?></td>
<td><?php echo $row["mno"]; ?></td>
<td><?php echo $row["username"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>