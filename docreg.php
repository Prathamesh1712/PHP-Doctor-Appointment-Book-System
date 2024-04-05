<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from reg order by pid desc limit 1";
$result=mysqli_query($conn,$query);
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
<?php
$insert=false;
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$pid=$_POST['tpp'];
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$adde=$_POST['t3'];
$spec=$_POST['t4'];
$mno=$_POST['t5'];
$username=$_POST['t6'];
$password=$_POST['t7'];

if(!conn)
{
  die("Connection Fail ".mysqli_connect_error());
}

else
{
$qq="insert into reg VALUES ( '$pid' ,' $fname ',  ' $lname' ,   '$adde' , '$_POST[gen]',  '$_POST[bg]',   '$spec',' $mno ',    ' $username ',      ' $password ') ";
 if(mysqli_query($conn, $qq))
{
echo '<script>alert(" Thank You ! Your Data Inserted Sucessfully!   ")</script>'; 
}
else 
{
echo '<script>alert("Sorry !Your Data Not Inserted ")</script>'; 
}
}
}
?>


<html lang="en">
<head>
<title>24/7 Hospital</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
  width: 700px;
  margin: 16px auto;
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
  padding: 12px;
}

.login p {
  padding: 12px;
}
.login input {
  box-sizing: border-box;
  display: block;
  width: 70%;
  border-width: 1px;
  border-style: solid;
  padding: 10px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.login input[type="select"],
.login input[type="password"]
 {
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
<b>  <li><a href="">Home</a></li></b>
<div class="topnav-right ">
<b>  <li><a href="">Contact</a></li></b>
<b>  <li><a href="">About </a></li></b>
</div>
</ul>
<br><br>
  <br><br>
<div class="login">
  <h2 class="login-header"> Doctor Registration</h2>
  <form  action="<?php echo ($_SERVER["PHP_SELF"]) ; ?>" method="post" class="login-container">
<center>   
 <p><input type="text" value="<?php echo $empid ?>"  name="tpp" required readonly ></p>
  <p><input type="text" placeholder="Enter First Name" name="t1" required ></p>
 <p><input type="text" placeholder=" Enter Last Name" name="t2" required ></p>
<p><input type="text" placeholder="Enter Address" name="t3" required ></p>
<div class="container">
      <select class="form-control" name="gen"  >
 <option Value=-1>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>  
      </select> 
 </div>
<br>
<div class="container">
    <select class="form-control" name="bg"  >
  <option value="-1">Select Blood Group</option>
        <option>O+</option>
        <option>O-</option>
 <option>A+</option>
 <option>A-</option>
 <option>B+</option>
 <option>B-</option>
 <option>AB+</option>
 <option>AB-</option>
      </select>
 </div>

<p><input type="text" placeholder="Speciality In" name="t4" required ></p>
<p><input type="text" placeholder="Enter Mobile Number" name="t5" required ></p>

<p><input type="text" placeholder="Enter Email ID / Email ID is Username" name="t6" required ></p>
    <p><input type="password" placeholder=" Enter Password" name="t7"  required></p>
   <p><input type="submit" value="Register Here">
  </form>
</div>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<div class="footer">
  <p>Copyright@2020</p>
</div>
</body>
</html>
</html>