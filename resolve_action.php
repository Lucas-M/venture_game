<?php
$verb = strval($_GET['verb']);
$noun = strval($_GET['noun']);
//include 'config.php';
//$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$mysqli = new mysqli("localhost", "vadmin", "sword", "venture_database");
if($mysqli->connect_error) {
  exit('Could not connect');
}

 





if($verb == "1") {
  $sql = "SELECT description FROM rooms WHERE Room_id = 1";
}

if($verb == "2") {
  $sql = "SELECT description FROM rooms WHERE Room_id = 2";
}


// Call SQL satatement
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($query_output);
$stmt->fetch();
$stmt->close();

echo "<p>" . $query_output . "</p>";




?>
