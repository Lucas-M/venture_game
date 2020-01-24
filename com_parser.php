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
  

  // Seledt the direction description based on look and direction
  //$sql = "SELECT n_description from rooms where room_id = 1";

  
  // Return the output from the look to variable
  return $verb + "test return" + $noun;
  // Update the dom with the return


}


?>
 
