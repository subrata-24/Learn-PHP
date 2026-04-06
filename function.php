<?php
      // Demo function
      function demoFunction(){
            echo "Hello!! This is a function.". "<br>";
      }

      demoFunction();

      // Function with parameter
      function userDetails($name, $age, $occupation){
            echo "Hello my name is $name. I am $age years old and I am a $occupation."."<br>";
      }

      userDetails("Subrata", 26, "Student");

      // Function with default parameter
      function houseRent($money = 5000){
            echo "This house rent is $money"."<br>";
      }
      houseRent(7000);
      houseRent();

      // Function with return value
      function sum($a, $b){
            return $a + $b;
      }

      echo "Summation of 5 and 6 is ". sum(5,6) . "<br>";

      // Function -> Passing argument by reference
      function addValue(&$value){
            $value+= 10;
      }

      $num = 10;
      addValue($num);
      echo $num. "<br>";

      //  Variable numbers of parameters(variadic operator)
      //  Here ...$x is called variadic operator. It means that take all argument
      //  passed to the function and put them into one array called $x. So $x is 
      //  an array. And most importantly variadic argument must be the last argument

      function sumMyNumbers(...$x) {
            // echo $x; It throws an error because $x is mainly an array.
            $n = 0;
            
            foreach($x as $num){
                  $n+= $num;
            }
            return $n;
      }

      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a."<br>";
?>