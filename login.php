
<html lang="en">
<head>
<title>24/7 Hospital</title>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	

<style>

</style>
</head>



<body>


<header>

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image:url('https://www.ofx.com/-/media/images_for_modules/modules/ml018%20-%20generic%20hero/blog/cs-342%20medical-tourisim-header-1600x600.ashx?hash=B1C009ADE22C991B6EB2EE16AA546F67.jpg');
      height: 300px;
      
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">24/7 Hospital</h1>
          <h4 class="mb-3">best online Appointment in pune</h4>
          <a class="btn btn-outline-light btn-lg" href="" role="button"
            >Contact Us</a
          >
        </div>
      </div>
    </div>
  </div>



 <!-- Navbar -->
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light ml-5 mr-5" href="homepage.php" role="button">Home</a>
		     <a class="btn btn-outline-light  ml-5 mr-5" href="Bookappt.php" role="button">Book Appointment</a>
			 <a class="btn btn-outline-light  ml-5 mr-5" href="viewbooking.php" role="button">Cancel Bookings</a>
			 
		</div>	
		
			 <div class="dropdown">
           <button class="btn btn-secondary btn-sm dropdown-toggle ml-5 mr-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                      Patient
          </button>
  
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="mydetails.php">My Profile </a></li>
            <li><a class="dropdown-item" href="updatepassword.php">Change Password</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
         </ul>
     </div>
 </nav>


<!-- Navbar -->



</header><br>

<p hidden><?php $_SESSION['username']; ?></p>
<?php


   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $a=$_SESSION['username'];
   $sql = "SELECT fname,lname FROM regp where username=' ".$a. " ' ";
   mysql_select_db('new');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "<h3>WELCOME :{$row['fname']}</h3>  <br> ".
         
        
         "<br>";
   
   }
   
  
   
   mysql_close($conn);
  
?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

   		
  <footer class="bg-primary text-white text-center text-lg-left">



<!-- Grid container -->
    <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"> About 24/7 </h5>

        <p>
      We are a team of young professionals who have put in efforts to bring the best doctors of pune  on one platform. 
	  24/7 is your online solution to search the best doctors in pune and book an appointment online.
     </div>




<!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Contact</a>
          </li>
        
          </li>
        </ul>
      </div>
<!--Grid column-->





<!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">About</a>
          </li>
          </ul>
          </div>
<!--Grid column-->


          </div>
<!--Grid row-->
  </div>

<!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">24/7 Hospital</a>
  </div>
  <!-- Copyright -->
</footer>



	 <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
 
</body>
</html>


