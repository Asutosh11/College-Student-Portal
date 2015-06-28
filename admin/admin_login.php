<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    </head>

<body>
<div class = 'container_border'>
<h4><b>ADMIN LOGIN</b></h4>

<br><br>

<form action = '<?php echo $_SERVER['REQUEST_URI'];?>' method = 'post'>
                    
                    Email: <input type = 'email' name = 'email' class="form-control"><br>
                    Password: <input type = 'password' name = 'password' class="form-control"><br>
                    <input type = 'submit' value = 'Enter' class="btn btn-danger">
                                                                                
                    
</form>

<br><br>

For Demo, <br> Email: <b>admin@mycollege.com</b><br>
Password: <b>adminpass</b>


<?php

if (!empty($_POST))
{

$email = $_POST['email'] ;
$password = $_POST['password'] ;


if (($email == 'admin@mycollege.com') and ($password == 'adminpass'))
{
                    ?>
                    
                    <script>
                    document.location = "admin.php" ;
                    </script>
                    
                    <?php
}

}

?>



</div>

   </body>

   </html>