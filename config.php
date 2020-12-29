<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('vinaybabu-01.mysql.database.azure.com');
define('vinaybabu@vinaybabu-01');
define('Vinay@11');
define('vinaybabu-01');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(vinaybabu-01.mysql.database.azure.com, vinaybabu@vinaybabu-01, Vinay@11, vinaybabu-01);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>