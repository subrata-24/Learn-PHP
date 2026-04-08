<?php
      class fruit{
            const MESSAGE = "I am a fruit!";

            // To access it from inside
            function message(){
                  echo self::MESSAGE;
            }
      }

      // To access it from outside
      echo fruit::MESSAGE;

      $fruit = new fruit();
      $fruit->message();
?>