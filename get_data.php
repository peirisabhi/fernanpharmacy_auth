<?php
$servername = "localhost";
$username = "root";
$username = "root_test";
//$password = "1234";
$password = "Ehni4?07";
//$dbname = "admin_test";
$dbname = "fernan_pharmacy_auth_db";

$response = array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Colombo');

$sql = "INSERT INTO log (date)
VALUES ('" . date("Y-m-d H:i:s") . "')";

if ($conn->query($sql) === TRUE) {
    $response['status'] = 200;
    $response['message'] = "successfully";
} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
    $response['status'] = 500;
    $response['message'] = $conn->error;
}

$response['auth'] = 1;

echo json_encode($response);

$conn->close();
?>