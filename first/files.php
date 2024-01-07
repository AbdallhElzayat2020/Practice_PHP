<?php
// Send Data To Server
rmdir("foo1");
echo file_exists("file.txt");

if(file_exists("file.txt")){

echo filesize("file.txt");

}
$file=fopen("file.txt","r");
var_dump($file);

while($line=fgets($file)!=false ) {
echo $line ."<br>";
}
$content=file_get_contents("file.txt");
echo $content ."<br>";

// create file if isn't avaibale
file_put_contents("file.txt","ahmed",);