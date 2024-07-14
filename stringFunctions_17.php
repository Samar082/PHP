<?php
  $username = array("Samar", "Kumar", "Mahato");
  // $name = "Rajib Guin";

  // $username = strtolower($username);
  // $username = strtoupper($username);
  // $username = trim($username);
  // $username = str_pad($username, 20, "@");
  // $username = str_replace("a", "$", $username);
  // $username = strrev($username);
  // $username = str_shuffle($username);
  // $username = strcmp($username, $name);
  // $length = strlen($username);
  // $index = strpos($username, " "); 
  // $firstname = substr($username, 0, 5);
  // $lastname = substr($username, 6);
  // $fullname = explode(" ", $username);9


  //foreach($fullname as $name){
 //     echo $name ."<br>";
 //   }
   
 $fullname = implode(" ", $username);

 echo$fullname
   
 ?>