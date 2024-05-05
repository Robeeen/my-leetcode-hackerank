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

echo PHP_EOL;

//You are in charge of the cake for a child's birthday. 
//You have decided the cake will have one candle for each year of their total age. 
//They will only be able to blow out the tallest of the candles. Count how many candles are tallest.

function birthdayCakeCandles($candles) {

    $count = array();
    foreach($candles as $candle){
        @$count[$candle]++;
    }
    print_r($count);
    echo max($count);

    //accepted solution
    $max = max($candles);
    $count = array_count_values($candles);
    return $count[$max];
}

$candles = [4,4,2,2,1,8,8,8];
birthdayCakeCandles($candles);

echo PHP_EOL;
//Given a time in -hour AM/PM format, convert it to military (24-hour) time.

//Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
//- 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.

function timeConversion($s) {
    // Write your code here
    return date("H:i:s", strtotime($s));
}

$s = "07:05:45PM";
timeConversion($s);

echo PHP_EOL;
//26. Remove Duplicates from Sorted Array

function removeDuplicates(&$nums){
    $nums = array_unique($nums);
    echo count($nums);
} 

$nums = [1,1,2];
removeDuplicates($nums);

echo PHP_EOL;

//Remove elemenrs
//Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. 
//The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.
//Input: nums = [3,2,2,3], val = 3
//Output: 2, nums = [2,2,_,_]

function removeElement(&$nums, $val){
    $result = 0;
    for($x = 0; $x <count($nums); $x++){
        if($nums[$x] != $val){
            $nums[$result] = $nums[$x];
            $result++;
        }
    }
    echo $result;
}

$nums =[3,2,2,3];
$val = 3;

removeElement($nums, $val);

echo PHP_EOL;

//Input: arr = [1,2,3,4,5], size = 1
//Output: [[1],[2],[3],[4],[5]]
//Explanation: The arr has been split into subarrays each with 1 element.

function array_chunks($arr, $size){
    if(count($arr) == 0){
        return [];
    }
    for($i = 0; $i <count($arr); $i++){
        $result = array_chunk($arr, $size);
    }
    print_r($result);
}

$arr = [1,2,3,4,5];
$size = 3;
array_chunks($arr, $size);

//same solution in Js
// var chunk = function(arr, size) {
//     if (arr.length === 0)
//         return [];
//     let results = [];
//     while(arr.length){
//         results.push(arr.splice(0, size))
//     }
//     return results;
// };

echo PHP_EOL;

//Note: Assume we are dealing with an environment that could only store integers within the 32-bit signed integer range: [−2^31, 2^31 − 1]. 
//For this problem, if the quotient is strictly greater than 2 ^ 31 - 1, then return 2 ^ 31 - 1, and if the quotient is strictly less than -2^31, then return -231.

function divide($dividend, $divisor) {
    $result = intdiv($dividend, $divisor);
    if($result > pow(2, 31) -1){
        $result = $result -1;
    }
    echo intval($result);
}

$dividend = 7;
$divisor = -3;
divide($dividend, $divisor, 0);
echo PHP_EOL;

//  84 round to  (85 - 84 is less than 3)
// 29 do not round (result is less than 40)
// 57 do not round (60 - 57 is 3 or higher)

// if $grades is an integer.

function gradingStudents($grades) {

     $diff = ceil($grades / 5) * 5 - $grades;
        if($grades < 40){
           echo $result = $grades;
        }else{
            if($diff < 3){
                echo $result = ceil($grades / 5) * 5;
            }else{
               echo $result = $grades;
            }
        }
}

$grades = 57;
gradingStudents($grades);


