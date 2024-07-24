<?php

declare(strict_types=1);

function someFunction(){
  $var = 10;
    echo $var . " ";
    $var ++;
};

someFunction(); 
someFunction();
someFunction();
echo PHP_EOL;
// setcookie(
//     "shams", path:'/', domain:'example.com', secure: true, httponly: true
// );

//setcookie('Test', 'value',  httponly: true );

// Verify that a value can be called as a function from the current scope.
function sum(int|float ...$number) : int|float{
    return array_sum($number);
}
$x = 'sum';
if(is_callable($x)){
    echo 'Sum of Array: ' . $x(1,3,4,5);
}else{
    echo 'Not found';
}

function Counts($nums, $target){
    $count = count($nums);
    for($i = 0; $i < $count; $i ++){
        for($j = 0; $j < $count; $j++){
            if($nums[$i] + $nums[$j] == $target){
                    return [$i, $j];
            }
        }
    }
}

//In multidimensional array we need to use "&' to solve this problem - Simple — use references.
$matrix = [
    [2, 4],
    [4, 6]
];

foreach( $matrix as &$row){
    foreach( $row as &$num){
        $num *= 2;
    }
}
print_r($matrix);

echo PHP_EOL;

$a = [
   [1, 5], [10, -2]
];

$b = [
   [1, 3], [6, 15]
];

$c = [
   [1, 9, 0, -8, 10, 0]
];

function add($a, $b) {
    $m = count($a);
    $n = count($a[0]);
    $matrix = [];
 
    for ($i = 0; $i < $m; $i++) {
       $matrix[$i] = [];
       for ($j = 0; $j < $n; $j++) {
         $matrix[$i][$j] = $a[$i][$j] + $b[$i][$j];
       }
       
    }
    return $matrix;
 }

print_r(add($a, $b));


