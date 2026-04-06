<?php
      function varDump($value){
            var_dump($value);
            echo "<br>";
      }

      $fruits = ["Apple", "Kiwi", "Jack-fruite", "Banana", "Cherry"];
      $userInfo = ["name" => "Subrata", "age" => "twenty six", "status" => "Student"];
      

      // sort -> Sort indexed array in ascending order
      sort($fruits);
      varDump($fruits);

      //rsort -> Sort the indexed array in descending order
      rsort($fruits);
      varDump($fruits);

      // asort -> Sort the associative array in ascending order according to value
      asort($userInfo);
      varDump($userInfo);

      // arsort -> Sort the associative array in descending order according to value
      arsort($userInfo);
      varDump($userInfo);

      // ksort -> Sort the associative array in ascending order according to key
      ksort($userInfo);
      varDump($userInfo);

      // krsort -> Sort the associative array in descending order according to key
      krsort($userInfo);
      varDump($userInfo);
?>