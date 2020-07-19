<?php 

/*
 * Required Variable for database connection
 */

$hostname = 'localhost'; 
$dbusername = 'root';  // Default username for local server
$dbpassword = '';  // leave password field empty for localserver
$databasename = 'my_db_name'; // Add the name of Database you create from phpmyadmin     

/*
 * Connect With Server
 */

$connection = mysqli_connect($hostname,$dbusername,$dbpassword);
if(!$connection) {
    die('Error in connect with server');   
}  
 
/*
 * Create Database
 */
// $sql = "CREATE DATABASE $databasename"; // It will create a Database with name you given. 
$sql = "CREATE DATABASE IF NOT EXISTS $databasename"; // It will create a Database if Database not exists already.
$output = mysqli_query($connection, $sql); 
if(!$output) {
    die('Error in database creation. ');
}


/*
 *  Connect with database
 */

$database = mysqli_select_db($connection, $databasename);  
if(!$database) {
    die('Error in connect with database');
}  

?>