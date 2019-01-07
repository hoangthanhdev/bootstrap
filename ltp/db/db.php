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

/*$sql_menu_cha = "
SELECT
	te.term_id,
	`name`,
	slug,
	taxonomy,
	parent
FROM
	wp_terms te,
	wp_term_taxonomy ta
WHERE
	te.term_id = ta.term_id
AND taxonomy = 'category'
AND parent = '0'
AND (
	ta.term_id = '22'
	OR ta.term_id = '36'
	OR ta.term_id = '57'
	OR ta.term_id = '58'
)";
$result_menu_cha = $conn->query($sql_menu_cha);*/
$URI= $_SERVER["REQUEST_URI"];
if(isset($_GET['tap'])){
$tap=$_GET['tap'];
$URI = str_replace("/tap-$tap/","",$URI);
}
$URI = str_replace(".html","",$URI);
$URI = str_replace("/ltp/","",$URI);

$sql_url = "
SELECT
	ID,
	post_name
FROM
	wp_posts
WHERE
	post_name = '$URI'";
$result_url = $conn->query($sql_url);

$sql_menu_con1 = "
SELECT
	te.term_id,
	`name`,
	slug,
	taxonomy,
	parent
FROM
	wp_terms te,
	wp_term_taxonomy ta
WHERE
	te.term_id = ta.term_id
AND taxonomy = 'category'
AND parent = 22";
$result_menu_con1 = $conn->query($sql_menu_con1);

$sql_menu_con2 = "
SELECT
	te.term_id,
	`name`,
	slug,
	taxonomy,
	parent
FROM
	wp_terms te,
	wp_term_taxonomy ta
WHERE
	te.term_id = ta.term_id
AND taxonomy = 'category'
AND parent = 36";
$result_menu_con2 = $conn->query($sql_menu_con2);

$row_cnt = $result->num_rows;

/*    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["post_title"]. "<br>";
    }
 $result->close();*/

/*while($row = $result_menu_con1->fetch_assoc()) {
        echo "name: " . $row["name"]. "<br>";
    }*/
$row_url = $result_url->fetch_assoc();
$name_url= $row_url["post_name"];
$name_id= $row_url["ID"];
/*echo $URI." - ";
echo $name_url." - ";
echo $name_id." - ";*/
?>
