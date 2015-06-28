<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>
<center>
    
    <h4><b>ADMIN PANEL</b></h4><br><br>

<?php

if ($_SERVER['HTTP_REFERER'] == 'http://localhost/ubuntu-laptop/college%20cms/admin/admin_login.php') //change this

{
    session_start() ;
}




if (isset($_SESSION))
{
    $_SESSION['name'] = 'admin';
    echo 'Hello,' . ' ' . $_SESSION['name'] ;


?>
<br><br>
<a href = 'admin_enter_student_attendance.php'>Enter student attendance</a> <br><br>
<a href = 'admin_complaint.php'>See complaints/grievances</a> <br><br>

<br><br>
    <a href = 'logout.php'>Logout</a><br>
    
    
<?php

}

else
{
    
 ?>   
    <script>
                    document.location = "Location: admin_login.php" ;
                    </script>
    <?php
}

?>




</center>

</div>

   </body>

   </html>