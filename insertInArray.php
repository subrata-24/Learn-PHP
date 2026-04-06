<?php
      // Adding element in a array
      // Add one element -> []
      $fruits = ["Orange", "Jack-fruit", "Banana"];
      $fruits[] = "Mango";
      varDump($fruits);

      // array_push() -> To add one or more array element
      array_push($fruits, "kiwi", "Lemon");
      varDump($fruits);

      $cars = ["brand" => "Ford", "model" => "Mustang"];
      $cars += ["color" => "red", "year" => 1994];
      varDump($cars);

      // array_unshift() -> is used to add one or more array items in the begining 
      // of the exisitng array
      array_unshift($fruits, "Carrot", "Pine-apple");
      varDump($fruits);

      // array_splice() -> Remove a portion of the array and adding new element 
      // on this position

      $new_fruits = ["Cherry", "Apple"];
      // array_splice($fruits, 2); // Remove all element from index 2
      // array_splice($fruits, 2, 3); // Remove 3 element from index 2
      array_splice($fruits, 2, 3, $new_fruits); // Remove 3 element from index 2 and
                                                // add newfruits on this position
      varDump($fruits);
      // It is not recommended to use array_splice() with associative arrays,
      // because it works based on position (index), not keys.
      // It removes elements and re-indexes the array,
      // which causes the original keys to be lost.
      // As a result, the associative array becomes an indexed array.

      // Merge two array
      $result = array_merge($cars, $fruits);
      varDump($result);
?>