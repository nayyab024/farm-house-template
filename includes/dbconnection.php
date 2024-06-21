<?php 

// DB credentials.
define('DB_HOST','154.56.34.22');
define('DB_USER','u398915417_farm');
define('DB_PASS','Farm@7856');
define('DB_NAME','u398915417_farm');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

// $con=mysqli_connect("localhost", "root", "", "poultry");

// if(mysqli_connect_errno()){
// echo "Connection Fail".mysqli_connect_error();
// }
?>