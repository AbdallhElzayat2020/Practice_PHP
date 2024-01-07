<?php
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
};