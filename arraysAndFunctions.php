<?php

// Question 1
echo "<h2>Question 1</h2>";

$array = [1,2,3,4,5,6,7,8];
$newArr =[];

foreach ($array as $key => $value) {
    if($value%2 == 0){
        $newArr[] = $value;
    }
}
echo '<pre>';
var_dump(  $newArr );
echo " <br> ******************************** <br>";

///////////////////////////////////////////


// Question 2
echo "<h2>Question 2</h2>";
$longestString = function ($array,$index = 0){
    $new = [];
   foreach ($array as $key => $value) {
    $index = strlen($value);
    $new[$value] = $index;
   }
   print_r( $new);

   $length =  max($new);
   foreach ($new as $key => $value) {
    if( strlen($key) == $length){
        return "longestString ".$key." length ".$length;
    }
   }
};


print_r( $longestString(['a','bb','cccc','ddd']) );

echo " <br> ******************************** <br>";





////////////////////////////////////////////////////////////////////

// Question 3
echo "<h2>Question 3</h2>";
$arr1 = [1,2,3,4,5,6,7,8];
$arr2 = [-1,-2,-3,-4,-5,];

$arr1count = count($arr1);
$arr2count = count($arr2);

$multip =[];
if ($arr1count <= $arr2count) {
    for ($i=0; $i < $arr1count ; $i++) { 
        $multip[] = $arr1[$i] * $arr2[$i]; 
    }
} else {
    for ($i=0; $i < $arr2count ; $i++) { 
        $multip[] = $arr1[$i] * $arr2[$i]; 
    }
}

print_r($multip);
echo " <br> ******************************** <br>";

/////////////////////////////////////////////////////////////////////////



// Question 4
echo "<h2>Question 4</h2>";

$factorial =  function ($number)
{
    $sum = $number;
    for ($i=$number-1; $i > 0 ; $i--) { 
        $sum *=$i; 
    }
    return $sum;
};


print_r($factorial(5));
echo " <br> ******************************** <br>";



/////////////////////////////////////////////////////////////////////////


// Question 5
echo "<h2>Question 5</h2>";
function isPrime($number) {
    if ($number < 2) {
        return "false";
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return "not prime";
        }
    }

    return "is prime";
}


print_r(isPrime(21));













