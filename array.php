<?php
      function varDump($elem){
            var_dump($elem);
            echo "<br>";
      }

      // indexed array
      $color = array("red", "green", "blue");
      $color[1] = "sky";
      $color[4] = "yello";
      varDump($color); // var_dump(variable) -> shows every information about variable

      // Associative array
      $userDetails = array("name" => "Subrata", "age" => 26, "status" => "Student");
      $userDetails["name"] = "Sabuj";
      $userDetails["married"] = true;

      foreach($userDetails as $x => $y){
            echo "$x = $y". "<br>";
      }

      // Mixing both
      $mixArray = ["hello", 24, "name" => "Subrata", "age" => 23];
      var_dump($mixArray);
      echo "<br>";
?>