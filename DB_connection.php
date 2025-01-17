<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;charset=utf8", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

# Connect to MySQL database
$MySQL = mysqli_connect("localhost","root","","webprog") or die('Error connecting to MySQL server.');

?>
