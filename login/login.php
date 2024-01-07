<?php 

session_start();

define("USERNAME","abdo");
define("PASSWORD","123123");



if (isset($_POST["username"])) {

if($_POST["username"] == USERNAME && $_POST["password"] == PASSWORD) {

  $_SESSION["username"] == $_POST["username"];
  
  header("LOCATION: home.php");

}


}

?>