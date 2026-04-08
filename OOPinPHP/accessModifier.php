<?php
      // Public -> properties and method can be accessed from everywhere
      class fruits{
            public $name;

            public function getDetails(){
                  return "Name: ".$this->name."<br>" ;
            }
      }
      $apple = new fruits();
      $apple->name = "Apple";
      echo $apple->getDetails();

      // private -> properties and methods can only be accessed within the 
      //              same class where they are defined.
      class people{
            private $name = "Subrata";

            public function getDetails(){
                  return "Name: ". $this->name."<br>";
            }
      }
      $subrata = new people();
      // $subrata->name = "Subrata"; //Error: Can not access private prop/method
      echo $subrata->getDetails(); // This work perfectly because getDetails
                                   // is a public method

      
      // Protected -> Can be access from the class and it's derive class
      class animal{
            protected $name;

            public function setDetails($name){
                  $this->name = $name;
            }
      }

      class birds extends animal{
            public function getDetails(){
                  return "This animal is a bird and the name is ". $this->name;
            }
      }

      $pegion = new birds();
      $pegion->setDetails("Pegion");
      echo $pegion->getDetails();

?>