<?php
      class fruits{
            public $name;

            function __construct($name)
            {
                  $this->name = $name;
                  echo $this->name." objects is created.<br>";
            }

            function __destruct()
            {
                  echo $this->name. " is destroyed.<br>";
            }
      }

      $apple = new fruits("Apple");
      $orange = new fruits("Orange");
?>