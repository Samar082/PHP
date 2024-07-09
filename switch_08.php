<?php
  // switch = replacement to using many elseif statements
  //          more efficient, less code to write

  $grade = "C";

  switch($grade){
    case "A": 
        echo"You did awesome";
        break;
    case "B":
        echo"You did great";  
        break; 
    case "C":
         echo"You did good";
         break; 
    case "D":
         echo"You did poor"; 
         break;      
    case "F":
        echo"You failed";
        break; 
    default: 
        echo"{$grade} is not valid grade";

  }

?>