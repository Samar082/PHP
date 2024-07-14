<?php
  // functions = write some code once, reuse when you need it 
  //             write () after function name to invoke
  //             ex. add() subtract() multiply() divide()

  // function happy_birthday($you, $age){
  //   echo"Happy Birthday dear {$you}! <br>";
  //   echo"You are {$age} <br>";
  // }

  // happy_birthday("Samar", "twentyOne"); 
  // happy_birthday("Samar", 21); 

  function is_even($number){
       $result = $number%2;
       return $result;
      
  }

  echo is_even(10);
?>