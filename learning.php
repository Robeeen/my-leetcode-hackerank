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


