<?php
session_start();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conk=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from bookapp order by pid desc limit 1";
$result=mysqli_query($conk,$query);
$row=mysqli_fetch_array($result);
$lastid = $row['pid'];
if($lastid== "")
{
	$empid="PID1";
}
else
{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid="PID" . ($empid + 1);
}
?>
<html lang="en">


<title>24/7 Hospital</title>

</head>
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
  border: 1px solid #e7e7e7;
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
body {
  background: white;
  font-family: 'Open Sans', sans-serif;
}
.login {
  width: 650px;
  margin: 20px auto;
  font-size: 16px;
}
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 16px;
}

.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 90%;
  border-width: 1px;
  border-style: solid;
  padding: 10px;
  outline: 0;
  font-family: times new roman;
  font-size: 1.00em;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
padding: 10px;

}

.login input[type="submit"]:hover {
  background: #17c;
}
.login input[type="submit"]:focus {
  border-color: #05a;
}
table {
    font-family: times new roman;
    border-collapse: collapse;
    width: 82%;
}

td, th {
    border: 2px solid DodgerBlue;
    text-align: center;
    padding: 8px;
    color:black;

}

tr:nth-child(even) {
    background-color: powderblue;
}
</style>

<body >
<div class="header">
<div class="topnav-left ">
<img src="doc.png" width="100" height="100" >  
</img>
</div>
<h1>24/7 Hospital</h1>
</div>
<ul>
<b>  <li><a href="">Home</a></li></b>
</ul>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if($login)
{
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Username and Password are Valid .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($showerror)
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>'.$showerror.'.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<p hidden><?php echo"  WELCOME ". $_SESSION['username']; ?></p>

<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $a=$_SESSION['username'];
   $sql = " SELECT fname,lname FROM reg where username=' ".$a. " ' ";
   mysql_select_db('new');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   
      echo "<h4>WELCOME Dr: {$row['fname']}{$row['lname']}</h4><br> ".
      

         "<br>";
 //  echo $aa;
   }


  
   
   mysql_close($conn);
?>
<html>
<head>
 <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>
</head>
<br><br>
<div class="login">
 <h2 class="login-header">  <u><b>Search and View My Appointment</b></u></h2>

  <form  action=" " method="post"   class="login-container">
<label for="txtdate"> Select Date to View My Appointment</label>
<input type="text" id="txtdate"  name="txtdate" class="form-control" required readonly >
<label for="sess">Select Session </label>
<div class="container">
 <select class="form-control" id="sess" name="sess"  >

   <option>Morning 10.00 AM To 1.00 PM</option>
        <option>Afternoon 2.00 PM To 4.30 PM</option>
 <option>Evening 6.00 PM TO 8.30 PM</option>
 
 
      </select>

 </div>
<p><?php
$hostname="localhost";
$username="root";
$password="";
$db="new";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select distinct(doc) from bookapp";
$result=mysqli_query($conn,$q);
?>
<div class="container">
Select Doctor<select class="form-control" name="session">
<?php  while ($row=mysqli_fetch_array($result)):; ?>

<option value="<?php echo $row['doc'];?>"><?php echo $row['doc']; ?></option>
<?php endwhile;?>
</select>
</div>
</p>
<center>
   <p><input type="submit" value="Search" name="Search">
</div>
  </form>
</center>
<?php
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'new');
if(isset($_POST['Search']))
{
$txtdate=$_POST['txtdate'];

$q="select * from bookapp where setdate=' ".$txtdate." '   ";
$qrun=mysqli_query($con,$q);
while($row=mysqli_fetch_array($qrun))
{
 ?>      

<?php
}
}
?>
<?php
include_once 'database.php';
$doc=$_POST['session'];
$result = mysqli_query($conn,"SELECT  *  FROM bookapp where setdate=' ".$txtdate." '  AND  sess='$_POST[sess]'  AND doc='$_POST[session]'   ");
?>
<!DOCTYPE html>
<html>

<center>
<br><br>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="login">
 <h2 class="login-header">  <u><b>Patient List</b></u></h2>
</div>
  <table>  
  <tr>
<td><h3>First Name</h3></td>
<td><h3>Last Name</h3></td>
<td><h3>Email</h3></td>
 <td><h3>Date</h3></td>
<td><h3>Doctor</h3></td>
 <td><h3>Session</h3></td>  
    
    <td><h3>Token Id</h3></td>    
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) 
{
$sa=$row['username'];
$_SESSION['user']=$sa;
?>
<tr>
  <td><?php echo $row["fname"]; ?></td>
  <td><?php echo $row["lname"]; ?></td>
  <td><?php echo $row["username"]; ?></td>
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




<br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<br>
<div class="footer">
  <p>Copyright@2020</p>
</div>
</body>
</html>
