<?php
      class fruits{
            public $name;
            public $color;

            function __construct($name, $color)
            {
                  $this->name = $name;
                  $this->color = $color;
            }

            public function intro(){
                  echo "I am $this->name and my color is $this->color";
            }
      }

      class strawberry extends fruits{
            public $weight;
            function __construct($name, $color, $weight)
            {
                  parent:: __construct($name, $color);
                  $this->weight = $weight;
            }

            public function intro(){
                  echo "I am $this->name, my color is $this->color and my 
                  weight is $this->weight.";
            }
      }

      $strawberry = new strawberry("Strawberry", "Red", 20);
      $strawberry->intro();
?>

// To prohibited the overriding we can use final keyword. If we use final 
// keyword befor a class or method then this class or method can not be overrided.