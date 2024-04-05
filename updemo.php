<html>
<body bgcolor="orange">
<form method = "post" action = "<?php $_PHP_SELF ?>">
<input type="text" name="fname" ><br><br>
<input type="text" name="lname"><br><br>
<input type="text" name="username" ><br><br>
<input type="text" name="password"><br><br>

<input type="submit" value="update" name="update">
</form>
</body>
</html>

 <?php
         if(isset($_POST['update'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            $fname=$_POST['fname'];
             $lname=$_POST['lname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $sql = "UPDATE upda ". "SET fname='$fname',password =' $password' "." WHERE username= '$username' " ;
            mysql_select_db('new');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
            ?>

