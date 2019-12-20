<!doctype html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Venture</title>
  <meta name="description" content="A traditional text adventure game.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=fallback">
  <link rel="manifest" href="site.webmanifest">

  <meta name="og:url" content="https://html5boilerplate.com/">
  <meta name="og:title" content="Venture">
  <meta name="og:type" content="website">
  <meta name="og:description" content="The web’s most popular front-end template which helps you build fast, robust, and adaptable web apps or sites.">
  <meta name="og:image" content="https://html5boilerplate.com/icon.png">

  <meta name="theme-color" content="#E08524">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@h5bp">
  <meta name="twitter:url" content="https://html5boilerplate.com/">
  <meta name="twitter:title" content="HTML5 ★ BOILERPLATE">
  <meta name="twitter:description" content="The web’s most popular front-end template which helps you build fast, robust, and adaptable web apps or sites.">
  <meta name="twitter:image" content="https://html5boilerplate.com/icon.png">

  <link rel="stylesheet" href="css/main.css">

</head>

<body>

	
<?php
$servername = "localhost";
$username = "vadmin";
$password = "sword"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=venture_database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
	
	
	
	
	
	
	
	
	
	
	
	
	<H1>Venture</H1>
	<p id="room_description">You find yourself sitting on the edge of a comforatble bed.<p> 
	<input id="user_action" value="">
	<button id="myBtn" onclick="resolve_action()">Do</button>

  <footer class="site-footer">
  </footer>

  <script src="js/main.js"></script>

</body>

<script>
function resolve_action() {
  var user_action = document.getElementById('user_action');
  document.getElementById("room_description").innerHTML = user_action.value;
  document.getElementById("user_action").value = ""; 
};



/* Capture the enter keypress   */
var input = document.getElementById("user_action");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("myBtn").click();
  }
});
</script>
</html>














