<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_b_16";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection faild');
}

// $sql = "drop database db_name";
// if ($conn->query($sql) === true) {
//     echo "DB created";
// } else {
//     echo "Error: " . $conn->error;
// }

// define('TBL_USER', 'cl_users');
// define('TBL_CONTACT', 'cl_contacts');

$TBL_USER = "cl_users";
$TBL_CONTACT = "cl_contacts";




?>