<?php
  $n = $_GET['number'];
  $divisores = 0;
  
  for($count=2; $count<$n; $count++)
   if($n % $count == 0){
    echo "Multiplo de $count<br />";
    $divisores++;
   }
  
  if($divisores)  echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
  else    echo "É primo!";
  
 ?>