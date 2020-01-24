<?php

//include 'config.php';

//$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$mysqli = new mysqli("localhost", "vadmin", "sword", "venture_database");

if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT description FROM Rooms WHERE Room_id = 1";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($rm_desc);
$stmt->fetch();
$stmt->close();

echo "<p>" . $rm_desc . "</p>";




?>
