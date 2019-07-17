<?php   
  
  $n1 = 20;
  $n2 = 40;
  $n3 = 6;
  
  $result = max_number($n1,$n2,$n3);
  echo $result;

  function max_number($number1, $number2, $number3){

      if($number1 > $number2 && $number1 > $number3){
        return $number1;

      }
      elseif( $number2>$number1 && $number2>$number3 ){
        return $number2;

      }
      else{
        return $number3;

      } 

    }//end function

  ?>