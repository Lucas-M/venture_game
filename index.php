<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Command Parser
//
// Assume look for now, such as look north or look n

function parse_command($verb, $noun ){
// Check verb for the look

  // If look, parse dirction
	//
  // Seledt the direction description based on look and direction
  //$sql = "SELECT n_description from rooms where room_id = 1";

  
  // Return the output from the look to variable
  return $verb + "test return" + $noun;
  // Update the dom with the return
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
      <div class="row">
        <div class="col-sm-3">User: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></div>
        <div class="col-sm-6"></div>
        <div class="col-sm-3"><a href="logout.php"><button id="logout" class="btn">Logout</button></a></div>
      </div>
      <h1><b>Venture</b></h1>
    </div>	
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
	  <input id="user_action" type="text" class="form-control" value="">
	  <br>
	  <br>
	  <button id="myBtn" class="btn btn-primary" onclick="resolve_action()">Do</button>
	  <br>
	  <br>
<!--
	  <p id="room_description">You find yourself sitting on the edge of a comforatble bed.<p> 
-->
        </div>
        <div class="col-sm-3"></div>
      </div>
    <p id="output_window">Type 1 word or 2</p>
<!--
    <button type="button" onclick="loadDoc()">Change Content</button>
-->
  <footer class="site-footer">
 <!--   <a href="dev_notes.php"><button class="btn">Dev Notes</button></a> -->
  </footer>
  <script src="js/main.js"></script>
</body>
<script>
  /* 
	resolve_action should parse the command and update the screen
  */   
  function resolve_action() {
    var user_action = document.getElementById('user_action').value;
    var space = user_action.indexOf(" ");
    var count = user_action.length;
    if (space != -1) {
      var verb = user_action.slice(0, space);
      var noun = user_action.slice(space + 1, count);
    } else {
      var verb = user_action;
      var noun = "-1";
    }; 
    
    /* document.getElementById("room_description").innerHTML = user_action.value; */
//    document.getElementById("room_description").innerHTML = 'verb: ' + verb + '</br>noun: ' + noun + '</br>space: ' + space + '</br>count: ' + count;
//    document.getElementById("user_action").value = ""; 

    // New Code Here 2/4/2020
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("output_window").innerHTML = this.responseText;
      }
    };
    //xhttp.open("GET", "ajax_info.txt", true);
    xhttp.open("GET", "resolve_action.php?verb="+verb+"&noun="+noun, true);
    xhttp.send();











    // New Code Here 2/4/2020

  };

  /* Capture the enter keypress   */
  var input = document.getElementById("user_action");
  input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById("myBtn").click();
    }
  });

  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    //xhttp.open("GET", "ajax_info.txt", true);
    xhttp.open("GET", "look.php", true);
    xhttp.send();
  }








</script>
</html>














