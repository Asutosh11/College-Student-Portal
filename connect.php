<?php
    
    date_default_timezone_set('Asia/Calcutta');
    
    
    $host = 'localhost' ; // Enter your host name in the quotes. If your database is on the same server, it will be localhost
    
    $username = 'asu619' ; // Enter your database username in the quotes.
    
    $password = 'ping49tw' ; // Enter your database password in the quotes.
    
    
    $database_name = 'collegecms' ;  // Enter your database name in the quotes.
    
    
    $dbc = mysqli_connect($host, $username, $password, $database_name) or die('Error connecting to databse') ;
    
    
    
    
    
    
    
    ?>