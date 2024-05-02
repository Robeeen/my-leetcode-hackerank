<?php

//Write a PHP program to push all zeros to the end of an array.
function move_zero_to_end($nums){

    if(count($nums) == 1) return $nums;
  
    for($i=0; $i<count($nums); $i++){
        if($nums[$i] == 0){
            unset($nums[$i]);
            array_push($nums,0);
        }
    }      
}
  $array1 = array(0,5,8,23,0,5,0,30);
  $array2 = array(10,0,11,12,0,14,17);
  
  print_r(move_zero_to_end($array1));

echo PHP_EOL;

//Write a PHP program to find majority element in an array.
//Input : array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6)


function containsDuplicate($nums){
    sort($nums);
    $count = count($nums);

    for ($i = 1; $i < $count; $i++) {
        if ($nums[$i] === $nums[$i - 1]) {            
            return $nums[$i];
        }
    }
    return false;
}

$nums = [1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6];
echo 'Contains Duplicate : ' . containsDuplicate($nums) . PHP_EOL;

echo PHP_EOL;

//Printing Number Pattern Using PHP

for($i = 1; $i<=4; $i++){
    $i1 = $i + 4;
    $i2 = $i1 + 4;
    echo $i . " " . $i1 . " " . $i2 . PHP_EOL;
}

echo PHP_EOL;

//Given two sorted arrays nums1 and nums2 of size m and n respectively,
// return the median of the two sorted arrays
//** Logic if merged array is Odd or Even then do the middle index */

function findMedianSortedArrays($nums1, $nums2) {
    //mergting two array
    $sorted = array_merge($nums1, $nums2);
    //sorted them
    sort($sorted);
    //counting the merged array
    $total = count($sorted);
    //find middle 
    $middle = floor($total / 2);

    //check if ODD or EVEN
    if($total % 2){
        return $sorted[$middle];
    }else{
        return ($sorted[$middle - 1] + $sorted[$middle]) /2;
    }
}

$nums1 = [1,3];
$nums2 = [2];

echo 'Median is :' . findMedianSortedArrays($nums1, $nums2);

echo PHP_EOL;
//Write a function that takes the binary representation of an unsigned integer and returns the number of '1' bits 
//it has (also known as the Hamming weight).

function hammingWeight($n) {
    //Convert decimal to binary first
    $toBinary = decbin($n);
    //split them and make array
    $toArray = str_split($toBinary);
    //sum of array items.
    return $sum = array_sum($toArray);
}

$n = 00000000000000000000000000001011;
echo 'The total of 1 bit is : ' . hammingWeight($n);

echo PHP_EOL;
//
// function compareTriplets($a, $b) {f
//     $bob = 0;
//     $alice = 0;
//     for($i = 0; $i <=$a; $i++){
//         if($a[$i]){
//          $alice ++;
//     }elseif($a[$i] < 3){
//          $bob ++;
//     }else{
//         $alice;
//         $bob;
//     }
//     }
//    return $alice;
//     return $bob;
//   }

//   $a = [7,9,10];
//   $b = [3,4,5];

  //echo compareTriplets($a, $b);

  //diagonal difference with php

  function diagonalDifference($arr) {

    $one = 0;
    $two = 0;
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i ++) {
        for( $j =0; $j < $n; $j ++){
            if($i == $j){
                $one += $arr[$i][$j];
            }
            if($i + $j == $n - 1){
                $two += $arr[$i][$j];
            }
        }
    }
    
    return  abs($one - $two);
    
    }

    $arr = [
        [ 1, 2, 3],
        [ 4, 5, 6],
        [ 9, 8, 9],  
    ];

    echo 'The diagonal difference is : ' . diagonalDifference($arr);

echo PHP_EOL;
//HackerRank - Plus-minus
//Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero.
// Print the decimal value of each fraction on a new line with  places after the decimal.
// /Print the following 3 lines, each to 6 decimals:
function plusMinus($arr1){

    $length = count($arr1);
    $pos = 0;
    $neg = 0;
    $zero = 0;
    for($i = 0; $i < $length; $i++){
        if($arr1[$i] > 0){
            $pos += 1;
        }elseif($arr1[$i] < 0){
            $neg += 1;
        }else{
            $zero++;
        }
    }
    $pos = number_format($pos / $length, 6);
    $neg = number_format($neg / $length, 6);
    $zero = number_format($zero / $length, 6);

    print($pos . "\n" . $neg . "\n" . $zero . "\n");
}

$arr1 =  [-4, 3, -9, 0, 4, 1];
$arr2 =  [1, 1, 0, -1, -1];

echo plusMinus($arr1);

//Its base and height are both equal to . It is drawn using # symbols and spaces. The last line is not preceded by any spaces.

//Write a program that prints a staircase of size . it is right aligned
   #
  ##
 ###
####

function staircase($n) {
    // Write your code here
    $x = '#';
    if($n < 3){
        return;
    }else{
        for($i = 1; $i <= $n; $i++){
            echo str_repeat(' ', $n-$i ) . str_repeat($x, $i ) . "\n";
        }
    }

}

$n = 6;
staircase($n);

echo PHP_EOL;

//Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
// Then print the respective minimum and maximum values as a single line of two space-separated long integers.




function miniMaxSum($arr) {
    // Write your code here
     sort($arr);
    
    //print_r($arr);
    echo $min = array_sum(array_slice($arr, 0, 4)) . ' ' . $max = array_sum(array_slice($arr, -4, 4));
      

}
$arr = [5,2,3,4,1];
miniMaxSum($arr);