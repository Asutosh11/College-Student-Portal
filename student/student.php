<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>

<h4><b>STUDENT HOMEPAGE</b></h4><br><hr><br>

<?php



if ( ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/student/student_login.php') or ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/student/student_login.php'))

{
   ob_start();
   session_start();

    
    echo 'Hello,' . ' ' . $_SESSION["name"] ;


?>
<br><br><br>


<b>Your profile</b><br><br><br>

   Email ID: <?php echo $_SESSION['email']; ?>  <br><br>
   Branch: <?php echo $_SESSION['branch']; ?>  <br><br>
   Year: <?php echo $_SESSION['year']; ?>  <br><br>
   Contact number: <?php echo $_SESSION['contact']; ?>  <br><br>
   Address: <?php echo $_SESSION['address']; ?>  <br><br>
                    
                    
                 <br><hr><br>
                 
                 <b>Your attendance for the last month (in precentage)</b>
                 
                 <br><br><br>
                 
                 <?php
                 
                 
                 require '../connect.php' ;
 
 echo "56/80";

 
  $query = "SELECT * FROM attendance ORDER BY id DESC limit 10" ;
  
  
  
   $result = mysqli_query($dbc, $query) ; // or  die('error querying') ;
   if ($result)
   {
   while ($row = mysqli_fetch_array($result))
   {
    if ($row['eemail'] == $_SESSION['email'])
    {
      $att = $row['attendance'] ;
      
      echo $att;
    }
    
    
  
  
   }
  }
     
  mysqli_close($dbc) ;
                 
                 
                 
                 
                 ?>
                 
                 
                 
                 
                 
                 
                 <br>
                    
                    
                 <br><hr><br>
                 
                 
                 
                 
                 
                 
                 <b>Lodge a complaint for any fault/irregularity inside college campus</b>
                 <br><br>
                 
                 
                 <form action = "<?php echo $_SERVER['REQUEST_URI'];?>" method = 'post'>
      
      <textarea name = "message" rows = "5" cols = "80" class="form-control"></textarea><br>
      <input type = 'submit' value = 'Post' name = 'comp'' class="btn btn-success">  
      </form><br><hr><br>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
    <b>Edit profile</b><br><br><br>
    
    
    <form action = '<?php echo $_SERVER['REQUEST_URI'];?>' method = 'post'>
                    
                    Change Name: <input type = 'text' name = 'name' class="form-control" ><br>
                    
                    
                    Change Branch: <input type = 'text' name = 'branch' class="form-control" >   <br>
                    Change Year: <input type = 'text' name = 'year' class="form-control" >   <br>
                    Change Contact number: <input type = 'number' name = 'contact' class="form-control" > <br>
                    Change Address: <input type = 'text' name = 'address' class="form-control" >   <br>

                    <input type = 'submit' value = 'Enter' name = 'edit' class="btn btn-success">
                        
                            <br><br> You need to logout and login again for the change to take place                                                    
                    
</form>
    
    
    
    

    <?php
    
    if (!empty($_POST['edit']))
    
    {
    
    $id = $_SESSION['id'] ;
    $name = $_POST['name'] ;
    
    
    
    
    $branch = $_POST['branch'] ;
    $year = $_POST['year'] ;
    $contact = $_POST['contact'] ;
    $address = $_POST['address'] ;

require '../connect.php' ;

 

 
 $query = "UPDATE students SET name='$name', branch='$branch', year='$year', contact='$contact', address='$address' WHERE id ='$id' ";
  
   mysqli_query($dbc, $query) ;
    
    
    mysqli_close($dbc) ;


}




 if (!empty($_POST['comp']))
 
 {
    $message = $_POST['message'] ;
    require '../connect.php' ;
    
     $query = "INSERT INTO `complaint`(message)" . "VALUES ('$message')" ;
    
    mysqli_query($dbc, $query) ;
    
    
    mysqli_close($dbc) ;
    
    
 }







?>







<br>
    <a href = 'logout.php'>Logout</a><br>
    
    
<?php

}

else
{
    header("Location: student_login.php");
}


?>


   </div>

   </body>

   </html>