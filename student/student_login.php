<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>
    

    
    <h4><b>STUDENT LOGIN</b></h4><br><br>



<form action = "<?php echo $_SERVER['REQUEST_URI'];?>"  method = 'post'>
                    
                    Email: <input type = 'email' name = 'eemail' class="form-control"><br>
                    Password: <input type = 'password' name = 'pass' class="form-control"><br>
                    <input type = 'submit' value = 'Enter' class="btn btn-success">
                                                                                
                    
</form>

<br><br>

For Demo, Email: <b>student@mycollege.com</b><br>
Password: <b>studentpass</b>


<?php



$eemail = $_POST['eemail'] ;
$pass = $_POST['pass'] ;


if (!empty($_POST))


{


require '../connect.php' ;

 

 
  $query = "SELECT * FROM `students` ORDER BY id DESC limit 10" ; 
  
   $result = mysqli_query($dbc, $query) ; // or  die('error querying') ;
   if ($result)
   {
   while ($row = mysqli_fetch_array($result))
   {
    




// $row['password']



if (($eemail == $row['email']) and ($pass == ""))

{
    
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['branch'] = $row['branch'];
                    $_SESSION['year'] = $row['year'];
                    $_SESSION['contact'] = $row['contact'];
                    $_SESSION['address'] = $row['address'];
                    mysqli_close($dbc) ;
                    
                    
                    ?>
                    
                    <script>
                    document.location = "http://localhost/ubuntu-laptop/college%20cms/student/student.php" ;
                    </script>
                    <?php
                    
}


   }
   }
   
   }

?>












