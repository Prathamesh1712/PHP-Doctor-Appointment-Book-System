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

$result = mysqli_query($conn,"SELECT * FROM bookapp where username='prathmshirke@gmail.com' ");
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
    <td><h3>USERNAME</h3></td>
    <td><h3>SET DATE</h3></td>
    <td><h3>DOCTOR</h3></td>
    <td><h3>SESSION</h3></td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["setdate"]; ?></td>
    <td><?php echo $row["doc"]; ?></td>
    <td><?php echo $row["sess"]; ?></td>

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