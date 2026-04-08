<?php
      abstract class car{
            public $name;

            function __construct($name)
            {
                  $this->name = $name;
            }

            function introduction(){
                  echo "Hello! just for checking abstract method.";
            }

            abstract protected function intro();
      }

      class audi extends car{
            public function intro(){
                  return "German quality!! I am an $this->name.<br>";
            }
      }

      $audi = new audi("Audi");
      echo $audi->intro();


      // Abstract method with argument
      abstract class fruits{
            abstract public function getDetails($name);
      }

      class jackFruits extends fruits{
            // When implementing an abstract method in a child class:
            // 1. The method name and required parameters must match the parent abstract method.
            // 2. You cannot add extra required parameters (values that must be 
            // provided by the object).
            // 3. You **can** add optional parameters (values that have default 
            // arguments) in addition to the required ones.
            // 4. Required parameters = must be provided when calling the method.
            // 5. Optional parameters = have default values, so they can be skipped when calling the method.
            function getDetails($name, $color = "red")
            {
                  return "Hello!! I am $name and my color is $color";
            }
      }

      $jack_fruits = new jackFruits();
      echo $jack_fruits->getDetails("Jack-fruits");
?>