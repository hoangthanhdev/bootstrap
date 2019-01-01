<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ltp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM wp_posts where post_status='publish'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["post_title"]. "<br>";
    }


$row_cnt = $result->num_rows;
echo $row_cnt;
$result->close();
?>
