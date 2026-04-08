<?php
      class calc{
            public static function sum($x, $y){
                  return $x + $y;
            }

            // Inside class
            public function res($a, $b){
                  return self::sum($a, $b);
            }

      }

      // Static method can be called from another class
      class checkStatic{
            public function res($a, $b){
                  return calc::sum($a, $b);
            }
      }

      // Outside from class
      echo calc::sum(7, 8)."<br>";

      // Inside class
      $sum = new calc();
      echo $sum->res(59, 41)."<br>";

      // Static method used in another class
      $ans = new checkStatic();
      echo $ans->res(51,49)."<br>";


      // Call static method from child class
      class domain{
            public static function getWebsiteName(){
                  return "Subratabiswas.me";
            }
      }

      class domainSubrata extends domain{
            public $websiteName;
            public function __construct()
            {
                  $this->websiteName = parent::getWebsiteName();
            }
      }

      $website = new domainSubrata();
      echo $website->websiteName;
?>