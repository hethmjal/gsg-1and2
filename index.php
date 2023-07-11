<?php





// Question 1
echo "<h2>Question 1</h2>";
function checkFirstAndLastTwoCharacters($text) {
   
    $firstTwo = substr($text, 0, 2);
    $lastTwo = substr($text, -2);

    if($firstTwo === $lastTwo)
    return "true";
    else
    return "false";
}

$text = "hayitham";
echo checkFirstAndLastTwoCharacters($text)  ;  
echo "<br>";
$text2 = "aabbccaa";
echo checkFirstAndLastTwoCharacters($text2) ;  


echo " <br> ******************************** <br>";



/////////////////////////////////////////////////////////////////////////////////


// Question 2
echo "<h2>Question 2</h2>";



function checkFirstTowCharacterIsGo($text) {
   
    $firstTwo = substr($text, 0, 2);

    if($firstTwo === "Go")
    return "true";
    else
    return "false";
}

$text = "Google";
echo checkFirstTowCharacterIsGo($text) ;  
echo " <br> ******************************** <br>";




// Question 3
echo "<h2>Question 3</h2>";

function getMultipleOf3or7($number) {
    if ($number <= 0) {
        return "number must be greater than zero";
    }

    if ($number % 3 == 0) {
        return "multiple of 3";
    } elseif ($number % 7 == 0) {
        return "multiple of 7";
    } else {
        return "not multiple of 3 or 7";
    }
}

$number = 49;
echo getMultipleOf3or7($number);
echo " <br> ******************************** <br>";




// Question 4
echo "<h2>Question 4</h2>";

function largestNumber($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}


echo largestNumber(10,30,20);;  
echo " <br> ******************************** <br>";






// Question 5
echo "<h2>Question 5</h2>";
function findNearestTo100($num1, $num2) {
    if ($num1 === $num2) {
        return 0;
    }

    $diff1 = abs($num1 - 100);
    $diff2 = abs($num2 - 100);

    if ($diff1 < $diff2) {
        return $num1;
    } else {
        return $num2;
    }
}


echo findNearestTo100(50, 700); 
echo " <br> ******************************** <br>";




// Question 6
echo "<h2>Question 6</h2>";
function largerInRange($num1, $num2) {
    if ( ($num1>=20 && $num1<=30) && ($num2>=20 && $num2<=30)) {
        return max($num1, $num2);
    } else{
        return 0;
    }
  
}
echo largerInRange(20,25);
echo " <br> ******************************** <br>";





// Question 7
echo "<h2>Question 7</h2>";
$count = 0;
$numbers = "a1vc3de6";
for ($i=strlen($numbers)-1; $i >=0 ; $i--) { 
    
    $check = $numbers[$i];
   if (is_numeric($check)) {
    $count++;
   }

}
echo $count;
echo " <br> ******************************** <br>";


// Question 8
echo "<h2>Question 8</h2>";
function sumOfDigits($number) {
    $digits = str_split($number);
    $sum = 0;

    foreach ($digits as $digit) {
        if (is_numeric($digit)) {
            $sum += $digit;
        }
    }

    return $sum;
}


echo sumOfDigits(12345);  
echo " <br> ******************************** <br>";


// Question 9
echo "<h2>Question 9</h2>";
$text = 'reverse';
$revers_text ="";
for ($i=strlen($text)-1; $i >=0 ; $i--) { 
    
    $revers_text .= $text[$i];
    

}
echo $text.' => '.$revers_text;
echo " <br> ******************************** <br>";





















