<?php
      interface family{
            public function fromFamily($family);
            public function makeSound();
      }

      class cat implements family{
            public $family;

            // Same as abstract class. We can not add required parameter but
            // we can add optional parameter.
            public function fromFamily($family)
            {
                  echo "From family: $this->family (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
            }

            public function makeSound()
            {
                  echo "Sound: Meow <br>";
            }
      }

      $cat = new cat();
      $cat->fromFamily("Felidae");
      $cat->makeSound();
?>