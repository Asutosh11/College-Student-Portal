<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>

    
    <h4><b>ADMIN STUDENT ATTENDANCE PANEL</b></h4><br><br>



<?php

 
    if ( ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/admin/admin.php')  or  ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/admin/admin_enter_student_attendance.php') ) //change this

{
    session_start() ;
}


if (isset($_SESSION))

{
      
      
      ?>
      <b>Input student's attendance</b>
      <br><br>
      <form action = "<?php echo $_SERVER['REQUEST_URI'];?>" method = 'post'>
      Email ID: <input type = 'text' name = 'eemail' method = 'post' class="form-control"><br>
      Percentage of class attended this semester: <input type = 'number' name = 'attendance' step="any" class="form-control"><br>
      <input type = 'submit' value = 'Add' class="btn btn-danger">  
      </form><br><br>
      
                            
                  <b>Edit student's attendance</b><br><br>
                  
      <form action = "<?php echo $_SERVER['REQUEST_URI']; ?>" method = 'post'>
      Email ID to edit: <input type = 'text' name = 'eemail_edit' class="form-control"><br>
      Edited attendance: <input type = 'number' name = 'attendance_edit' step="any" class="form-control"><br>
      <input type = 'submit' value = 'Add' class="btn btn-danger">  
      </form>
      <br>
         <br>
        <br>
    <a href = 'logout.php'>Logout</a><br><br>                   
                            
                            
                            
                            <?php
    }
    
    ?>
    
    
    
    
    <?php
    
    //Entering students attendance into database
    
    
    $eemail = $_POST['eemail'] ;
    $atten = $_POST['attendance'] ;
    
    
    if ( (isset($eemail)) && (!empty($eemail)) && (isset($atten)) && (!empty($atten)) && (!empty($_POST)) )

    {
      
          include '../connect.php' ;
    
    $query = "INSERT INTO `attendance`(email, attendance)" . "VALUES ('$eemail', '$atten')" ;
    
    mysqli_query($dbc, $query) ;
    
    
    mysqli_close($dbc) ;
    
   
    
    ?>
    
    
    
    
    
    <?php
    
    
    
    }
    
        
    
   //----------------------------------------------------------------------------------------------------------------------------------------//   
    
    
   ?> 
    
    
    
    
    
    <?php
    
    // Updating/Editing students attendance into database
    
    
    $eemail_edit = $_POST['eemail_edit'] ;
    $atten_edit = $_POST['attendance_edit'] ;
    
    
    if ( (isset($eemail_edit)) && (!empty($eemail_edit)) && (isset($atten_edit)) && (!empty($atten_edit)) && (!empty($_POST)) )

    {
      
          include '../connect.php' ;
    
    $query = "UPDATE attendance SET email='$eemail_edit', attendance='$atten_edit' WHERE email='$eemail_edit' ";
    
    mysqli_query($dbc, $query) ;
    
    
    mysqli_close($dbc) ;
    
       
    
    }
    
    
    
    ?>
    
    
    
    </div>

   </body>

   </html>