<?php
      class fruits{
            public $name;
            public $color;

            function __construct($name, $color)
            {
                  $this->name = $name;
                  $this->color = $color;
            }

            protected function intro(){
                  echo "I am $this->name and my color is $this->color";
            }
      }

      class strawbery extends fruits{
            public function message(){
                  $this->intro();
                  echo "Am I fruit or berry!!";
            }
      }

      $strawberry = new strawbery("Strawberry", "Red");
      // $strawberry->intro(); // Error: Can not access this from outside
                               // the class or it's child class.
      $strawberry->message();
?>