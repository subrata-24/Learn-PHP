<?php
      trait message1{
            function msg1(){
                  echo "This is frist trait!!";
            }
      }

      trait message2{
            function msg2(){
                  echo "This is the second trait!";
            }
      }

      trait message3{
            function msg2(){
                  echo "This is for checking the same named function trait.";
            }
      }

      class sendMessage{
            use message1;
            use message2;
      }

      $msg = new sendMessage();
      $msg->msg1();

      // There is a problem. What if the two trait has same named function!
      // Nothing happened if two trait have same named function.But the 
      // problem occured when we use them in same class. Because it becomes
      // confused which one to use. So it throws error.
      // sol-> use "instedof"

      class sameNameTrait{
            use message2,message3{
                  message2::msg2 insteadof message3;
            }
      }

?>