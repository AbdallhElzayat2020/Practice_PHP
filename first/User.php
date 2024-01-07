<?php 
// if($_POST["op"]== "+"){

// echo $_POST["x"] + $_POST["y"];

// }elseif ($_POST["op"] == "-") {

//   echo $_POST["x"] - $_POST["y"];
  
// }elseif ($_POST["op"]== "*") {

//   echo $_POST["x"] * $_POST["y"];
  
// }elseif ($_POST["op"]== "/") {

//   echo $_POST["x"] / $_POST["y"];
  
// }else {

//   echo "Error en la operación";
// }

switch($_POST["op"]) {
  case "+":
    echo $_POST["x"] + $_POST["y"];
  break;
  case "-":
    echo $_POST["x"] - $_POST["y"];
  break;
  case "*":
    echo $_POST["x"] * $_POST["y"];
  break;
  case "/":
    echo $_POST["x"] / $_POST["y"];
  break;
  default:
  echo "please choose an operation";
}