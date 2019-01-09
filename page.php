<?php
session_start();



if (isset($_GET["e"])) 
{ 
   $data = $_GET["e"];
   if($data){
      $_SESSION["e"] = $data;
      
      var_dump($data);
      
      };
      
} 

echo "<a href='pageView.php'>html view</a>";


