<?php

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'hct');
 
 $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
 if(!$conn ){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
ECHO "Connection Success";
?>