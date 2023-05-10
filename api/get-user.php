<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, surname FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    //turn result into a php array
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    //inform client that we send json data
    header("Content-type: application/json");
    //turn php array to json and send to client
    echo json_encode($rows);
} else {
    echo "0 results";
}

?>