<?php
      function varDump($value){
            var_dump($value);
            echo "<br>";
      }

      // array_splice() -> as mentioned before
      
      // unset() -> in indexed array
      // Note -> The unset() function does not re-index the array. So, if you 
      // remove an element at index 1, the other elements (e.g., at index 0, 2, 3, etc.) 
      // will keep their original indices, leading to a "gap" in the sequence of indices.
      $fruits = ["apple", "banana", "lemon", "kiwi"];
      unset($fruits[1], $fruits[3]); // Removes the element that is specidied here
      varDump($fruits);

      // unset() -> in associative array
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      unset($cars["model"], $cars["year"]);
      varDump($cars);


      // array_diff() ->  Compares values of two (or more) arrays
      // Returns an array with values from the first array that are NOT present in 
      // the other arrays
      // Keys are preserved from the first array
      $userInfo = ["name1" => "Subrata", "name2" => "Subrata", "age" => 26, "status" => "unmarried"];
      $newArray =  array_diff($userInfo, ["Subrata", "unmarried"]);
      varDump($newArray);


      // array pop() -> Removes the last element from the array
      $fruits = ["apple", "banana", "lemon", "kiwi"];
      array_pop($fruits);
      varDump($fruits);

      // array shift -> Removes the first element from the array
      array_shift($fruits);
      varDump($fruits);
      
?>