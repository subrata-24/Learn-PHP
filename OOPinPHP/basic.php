<?php
      class fruit{
            public $name;
            public $color;

            function setDetails($name, $color){
                  $this->name = $name;
                  $this->color = $color;
            }

            function getDetails(){
                  echo "Name: ". $this->name . ", Color: ". $this->color. "<br>";
            }
      }

      $apple = new fruit();
      $apple->setDetails("Apple", "Red");
      $apple->getDetails();
?>