<?php 
// echo$_POST["x"] + $_POST["y"];
if($_POST["op"]== "+"){

echo $_POST["x"] + $_POST["y"];

}elseif ($_POST["op"] == "-") {

  echo $_POST["x"] - $_POST["y"];
  
}elseif ($_POST["op"]== "*") {

  echo $_POST["x"] * $_POST["y"];
  
}elseif ($_POST["op"]== "/") {

  echo $_POST["x"] / $_POST["y"];
  
}else {

  echo "Error en la operación";
}