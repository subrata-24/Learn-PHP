<?php
$t = date("H"); // Returns the current hour in 24-hour format as a string.

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 5;
if ($a < 10)
  $b = "Hello";
echo $b . "<br>";
// PHP does not have block scope for variables like C++/Java
// Variables declared in if, for, while are accessible after the block
// But in function the variables are block scoped

// Switch Case
$a = 10;
$b = 19;
$oprtr = "&";

switch ($oprtr) {
  case "+": {
      $result = $a + $b;
      break;
    }
  case "-": {
      $result = $a - $b;
      break;
    }
  case "*": {
      $result = $a * $b;
      break;
    }
  case "/": {
      $result = $a / $b;
      break;
    }
  default: {
      $result = "Please enter a valid operator";
    }
}

echo $result . "<br>";

// Match expression
// Match single value
$color = "red";

$text = match($color){
  "green" => "Your favourite color is Green",
  "red" => "Your favourite color is Red",
  "blue" => "Your favourite color is Blue",
  default => "Your favourite color is neither Green, Red nor Blue"
};

echo $text . "<br>";

// Match multiple value
$day = 3;

$dayStatus = match($day){
  2,3,4,5,6 => "These day seems too long",
  7,1 => "Weekend are best",
  default => "Invalid day"
};

echo $dayStatus;
