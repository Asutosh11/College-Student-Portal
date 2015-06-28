<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>
    <center>

    
    <h4><b>ADMIN MANAGE COMPLAINT PANEL</b></h4><br><br>


<?php


    if ( ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/admin/admin.php')  or  ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/admin/admin_complaint.php') )     //change this

{
    session_start() ;
}


if (isset($_SESSION))

{
    
    
    
    require '../connect.php' ;

 

 
  $query = "SELECT * FROM complaint ORDER BY id DESC limit 10" ; 
  
   $result = mysqli_query($dbc, $query) ; // or  die('error querying') ;
   if ($result)
   {
   while ($row = mysqli_fetch_array($result))
   {
    $messag = $row['message']; 
    $i = $row['id'];
   
    
      
     
    echo '<br>' . '<br>' ;
    
    echo $i . '. '; 
    echo $messag ;
    
    
    
   
    }
  }
     
  mysqli_close($dbc) ;
     
      
      
      ?>
      
      
                            
                  
        <br><br><br>
    <a href = 'logout.php'>Logout</a><br><br>                   
                            
                            
                            
    
    
    
    
    
    <?php
    
    
    
    
    
    
    
    
}  
    
   
    
    ?>
    
    

    
    
    
    
    </center>
    
    </div>

   </body>

   </html>