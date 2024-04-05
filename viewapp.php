<?php
session_start();
?>
<html lang="en">
<head>
<title>24/7 Hospital</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}
.image {
  display: block;
  width: 100%;
  height: auto;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: DodgerBlue;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .59s ease;
}
.container:hover .overlay {
  bottom: 0;
  height: 30%;
}
.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
body {
  margin: 0;
}
.header {
  background-color: DodgerBlue;
  padding: 1px;
  text-align: center;
 font-family:comic sans ms;
color:white;
}
.btn {
  background-color: lightgreen;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 3px solid #e7e7e7;
  background-color: #f3f3f3;
}
li {
  float: left;
}
li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 15px 50px;
  text-decoration: none;
color:black;
font-size:18px;
}
li a:hover:not(.active) {
  background-color: DodgerBlue;
}
li a.active {
  color: white;
  background-color: DodgerBlue;
}
.btn:hover
 {
  background-color: #3e8e41;
  color: white;
}
.topnav-right 
{
  float: right;
}
.topnav-left 
{
  float: left;
}
.footer {
  background-color: #2BAE66FF;
  padding: 1px;
  text-align: center;
color:white;
font-size:20px ;
font-family:time new roman ;
}
* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 8px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
p.impact 
{
  font-family: Impact, Charcoal, sans-serif;
}

table {
    font-family: comic sans ms;
    border-collapse: collapse;
    width: 75%;

}

td, th {
    border: 2px solid DodgerBlue;
    text-align: center;
    padding: 8px;
    color:DodgerBlue;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
</head>
<body>
<div class="header">
<div class="topnav-left ">
<img src="doc.png" width="100" height="100" >  
</img>
</div>
<h1>24/7 Hospital</h1>
</div>


<ul>



<div class="topnav-right ">


<b>  <li><a href="logout.php">Logout </a></li></b>
</div>
</ul>
<hr>
<p hidden><?php $_SESSION['username']; ?></p>
<?php
session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $copn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $copn ) {
      die('Could not connect: ' . mysql_error());
   }
   $a=$_SESSION['username'];
   $sql = "SELECT fname,lname FROM regp where username=' ".$a. " ' ";
   mysql_select_db('new');
   $retval = mysql_query( $sql, $copn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "<h3>WELCOME :{$row['fname']}{$row['lname']}</h3>  <br> ".
         
        
         "<br>";
   
   }
   
  
   
   mysql_close($copn);
?>



<?php
session_start();
//echo $_SESSION['username'];
include_once 'database.php';

$result = mysqli_query($conn,"SELECT * FROM bookapp where username='$_SESSION[username]' ");
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

       
    <td><h3> DATE <br>MM/DD/YYYY</h3></td>
    <td><h3>DOCTOR</h3></td>
    <td><h3>SESSION</h3></td>
 <td><h3>TOKEN ID</h3></td>

  </tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
  
   
    <td><?php echo $row["setdate"]; ?></td>
    <td><?php echo $row["doc"]; ?></td>
    <td><?php echo $row["sess"]; ?></td>
<td><?php echo $row["pid"]; ?></td>

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<div class="footer">
  <p>Copyright@2020</p>
</div>
</body>
</html>