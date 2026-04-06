<?php
      // While loop
      $i = 0;

      while($i < 10){
            $i++;
            if($i === 9) break;
            if($i === 5) continue;
            echo "Hello Subrata" ." ". $i ."<br>";
      }

      // Do...while loop
      $i = 0;

      do{
            echo "Hii". " " . $i. "<br>";
            $i++;
      }while($i < 8);

      // for loop
      for($i = 0; $i<10; $i++){
            echo "The number is ". $i . "<br>";
      }

      // for...each loop
      $colors = array("red", "blue", "green");

      foreach($colors as $color){
            echo "The current color is $color"."<br>";
      }
      echo $colors[1]."<br>";

      // Associative array "key => value" pair
      $students = array("name" => "Subrata", "age" => 26, "city" => "Dhaka");
      $students["city"] = "Barishal";
      $students["identity"] = "Bangladeshi";

      foreach($students as $key => $value){
            echo "$key = $value". "<br>";
      }
?>