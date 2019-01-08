<?php
$data = $_GET["e"];

$array = explode(",", $data);

var_dump($array);

$displayed = "<ul>";
foreach ($array as $value){
   echo "<li>".$value."</li>";
}

$displayed .= "</ul>";