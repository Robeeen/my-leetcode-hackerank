<?php

// class Rectangle {
//     public $length = 100;
//     public $width = 50;

//     public function calculate($unit){
//         $area = .5 * $this->length * $this->width;
//         return $area . $unit;
//     }

//     public function calculate_perimeter($unit){
//         $peri = 2 * ( $this->length + $this->width);
//         return $peri . $unit;
//     }
// }

// $recangle = new Rectangle();

// print'Area : ' . $recangle->calculate('cm') . PHP_EOL; 
// print 'Perimeter: ' . $recangle->calculate_perimeter('cm');

// class Rectangle {
//     public $length;
//     public $width;

//     public function __construct($length, $width){
//             $this->length = $length;
//             $this->width = $width;
//     }

//     public function getArea($unit){
//         $area = .5 * $this->length * $this->width;
//         return $area . $unit;
//     }

//     public function getPerimeter($unit){
//         $perimeter = 2 * ($this->length + $this->width);
//         return $perimeter . $unit;
//     }

// }

// $rectangle = new Rectangle(150, 120);

// print 'Area: ' . $rectangle->getArea('m') . PHP_EOL;
// print 'Perimeter: ' . $rectangle->getPerimeter('m') . PHP_EOL;


// class Employee{
//     public int $salary;

//     public function __construct(
//         public int $age, public string $name, int $salary
//     )
//     {
//         $this->salary = $salary;
//         $this->age = $age;
//         $this->name = $name;
//     }

//     public function information(){
//         $rate = $this->age * $this->salary;
//         return "Total:" . $rate . " Name: " . $this->name;
//     }
// }

// $total_employee = new Employee(32,"shams", 50);

// print $total_employee->information();

// echo PHP_EOL;
// date_default_timezone_set('GMT + 6');
// echo date('d/m/Y g:ia', strtotime('first day of January')).PHP_EOL;

// $currentTime = time();

// echo date('d/m/Y g:ia', $currentTime + 5 * 60 * 60 * 24);
// $mytime = date('d/m/Y g:ia');

// echo '<pre>';
// print_r(date_parse($mytime));
// echo '</pre>';

// echo PHP_EOL;

// function findSingle($array, $nums){      

//     for($i = 0; $i< $nums; $i++){
//         for($j = 0; $j < $nums; $j++){
//             if($i !== $j && $array[$i] ==$array[$j] ){
//                 break;
//             }
//             if($j ==$nums){
//                 return $array[$i];
//             }
//         }

//     }
// }

// $array = [3,2,1,4,5,4,3,5,2];
// $nums = sizeof($array);
// //echo findSingle($array, $nums);

// function reformatDate($date){
//     return date('Y-m-d', strtotime($date));
// }

//echo reformatDate("20th Oct 1955");

//if input is a date like 2015-12-01, then the total is sum of all digit, then add $ infront of the total.

// function sum_of_digit( $dob ) {
//     //Insert your code here 
//     $var = array_map('intval', str_split($dob));
//     var_dump($var);
//     echo '$' . $var[0] + $var[1] + $var[2] + $var[3] + $var[5] + $var[6]  + $var[8] + $var[9];
// }
// echo sum_of_digit('1980-10-01');

// echo PHP_EOL;
// //Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

function twoSum($nums, $target) {
    $n = count($nums);
    for($i = 0; $i < $n; $i++){
        for($j = $i + 1; $j < $n; $j++ ){
            if($nums[$i] + $nums[$j] === $target){
                return [$i, $j];
            }
        }    
    }
}

$nums = [2,7,11,15];
$target = 9;
print_r(twoSum($nums, $target));

echo PHP_EOL;

function addTwoNumbers($l1, $l2) {
    foreach(array_reverse($l1) as $newl1){
      $new1 =  str_split($newl1); 
      var_dump($new1);
    }
    foreach(array_reverse($l2) as $newl2){
       $new2 = str_split($newl2);
    }
    print_r($new1 + $new2);
    
}

echo addTwoNumbers([2,4,3], [5,6,4]);



echo PHP_EOL;

function firstNumber($array){
  $sum = array_sum($array);
  if($sum % 2 == 0 || $sum == 0){
    return "even";
  }else{
    return "Odd";
  }
}

//function firstNumber($array) => $sum = array_sum($array);  $sum % 2 == 0 || $sum == 0 ? 'even' : 'Odd';

echo firstNumber([12,1]);

echo PHP_EOL;

function findPrime($array){
  if($array = 1);
  return 0;

  for($i = 2; $i < $array /2; $i++){
    if($array % $i == 0){
      return 0;
    }
    return 1;
  }
}

//find the largest number in array without array_max or sorting function

function findLargest ($array){
  $large = $array[0];
  $length = count($array);
  for($i=0; $i < $length; $i++){
    if($array[$i] > $large){
      $large = $array[$i];
    }
  }
  return $large;
}

echo findLargest([22,33,44,55,66]);

echo PHP_EOL;

//Given an index and an array, return the value of the array with the given index.

function arrayIndex($array, $index){
  $index1 = floor($index);
  return $array[$index1];

}

echo arrayIndex([1, 2, 3, 4], 6.535355314 / 2);


echo PHP_EOL;

function reminder($x, $y){
  return $x % $y;
}

echo reminder(-9, 45);

echo PHP_EOL;
//Create a function that returns true if a string contains any spaces.

function checkString($str){
 if($str == trim($str) && strpos($str, ' ') == true){
  return 'true';
 }else{
  return 'false';
 }

}

echo checkString('This test');

echo PHP_EOL;
//Create a function that validates whether a number n is within the bounds of lower and upper. 
//Return false if n is not an integer.

function intWithinBounds($n, $lower, $upper) {
	$new = is_int($n);
  if($new){
    if($new >= $lower && $new < $upper){
      return 'True';
    }else{
      return 'False';
    }    
  }else{
    return 'false not an integar';
  }
}
echo intWithinBounds(1,1,9);

echo PHP_EOL;
//Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n), 
//ans[i] is the number of 1's in the binary representation of i.

function countBits($n) {
  $result = [];
  for($i = 0; $i <= $n; $i++){
      $result[] = substr_count(decbin($i), "1");
  }
  return $result;
}

print_r(countBits(5));

$str = 'abcdefg efg acbdefg dmcefg';
echo substr_count($str, 'efg');

echo PHP_EOL;
$keywords = preg_split("/,/", "hypertext language, programming");
print_r($keywords);

echo PHP_EOL;

function secondLargest($array){
  rsort($array);   
    if(current($array) > $array[1]){
      echo $array[1];
    }
}
secondLargest([10, 40, 30, 20, 50]);

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}

echo PHP_EOL;


function reverseIntegar($num){
  $number = (string) $num;
  $revStr = strrev($number);
  $reverse = (int) $revStr;

  echo $reverse;

}

echo reverseIntegar(54321);

echo PHP_EOL;
//add own digit of the a number 54321 = 15
function addOwndigit($num){
 $number = array_map('intval', str_split($num));

 echo array_sum($number);
}

addOwndigit(555);


echo PHP_EOL;
//Reversing a Binary String
function reversedBinaryInteger($num) {
  $new = (string)decbin($num);
  $new1 = strrev($new);
  $new2 = (int) bindec($new1);
  echo $new2;
}

reversedBinaryInteger(1010);

echo PHP_EOL;
//Given an array of integers arr, return true if the number of occurrences of each value in the array is unique or false otherwise.

//The following solution is ok but when double -6, -6 is there is not working.

function uniqueOccurrences1($arr){
  return count(array_unique($arr)) !== count($arr);
    
}

echo uniqueOccurrences1([3,5,-2,-3,-6,-6]);

echo PHP_EOL;
//Given an integer x, return true if x is a palindrome, and false otherwise.
function findPalindrom($x){
  $result = false; 
 //reverse the number now and make string
 $newString = strrev($x);
 //convert string to integer
 $integar = (int)$newString;
 if($x === $integar){
  return $result = true;
 }
 return $result;
}

//echo 'The palindrome: ' . findPalindrom(21112);

echo PHP_EOL;
//Given an integer x, return true if x is a palindrome, and false otherwise.
//Could you solve it without converting the integer to a string?
//most correct answer:
function isPalindrome($x) {
  if($x < 0){
      return false;
  }
  $reversed = 0;
  $original = $x;
  while($x != 0){
      $reversed = $reversed * 10 + $x % 10;
      $x = intval($x / 10);
}
return $original === $reversed;
}

echo 'The new palindrome: ' . isPalindrome(0);

//Roman to integar:
//Most easy solutions: Input: s = "LVIII" Output: 58 Explanation: L = 50, V= 5, III = 3.
/**
     * @param String $s
     * @return Integer
     */
function romanToInt($s) {
        $romans = [
          'M' => 1000,
          'C' => 100,
          'L' => 50,
          'D' => 500,
          'X' => 10,
          'V' => 5,
          'I' => 1
        ];

        $Integer = 0;
        $length = strlen($s);
        for($i = 0; $i < $length; $i ++){
          if($romans[$s[$i]] >= $romans[$s[$i + 1]]){
            $Integer = $Integer + $romans[$s[$i]];
          }else{
            $Integer = $Integer - $romans[$s[$i]];
          }
        }
        return $Integer;
}
echo romanToInt('LVIII');

echo PHP_EOL;


//

/**
     * @param int $num
     * @return String
     */
    function intToRoman($num) {
      $romans = [
      'M' => 1000,
      'CM' => 900,
      'D' => 500,
      'CD' => 400,
      'C' => 100,
      'XC' => 90,
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1,
      ];

      $r_string = '';
      foreach ($romans as $roman => $value){
          while($num >= $value){
              $r_string .= $roman;
              $num -= $value;
          }
      }
      return $r_string;
  }

  echo 'INT to Roman:  ' . intToRoman(1234);

  echo PHP_EOL;

//Longest common prefix Input: strs = ["flower","flow","flight"] Output: "fl"
/**
     * @param String[] $strs
     * @return String
     */
 function longestCommonPrefix($strs) {
      $prefix = ''; //as asking for string.
      $length = strlen($strs[0]);//as we want to select the first word "Flower" of the array.
      for($i = 0; $i < $length; $i++) //loop inside of the first word "Flower"
       {
          $letter = $strs[0][$i]; //got "flo" from "flower" 
          foreach ($strs as $word) {
              if ($word[$i] != $letter) //compare flower is not equal to flo
              {
                return $prefix;
              }
          }
          $prefix .= $letter; //append the "flo" into preix.
      }      
      
      return $prefix; //return prefix
  }

  echo longestCommonPrefix(["flower","flow","flight"]);
  
  echo PHP_EOL;

  //Valid Parenthesis (true or false)
  //Input: s = "()[]{}" Output: true, Input: s = "()" Output: true, Input: s = "(]" Output: false
  /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
      $sLength = strlen($s);
      if($sLength % 2 !==0){
        return false;
      }
      $keySet = [
        '(' => ')',
        '{' => '}',
        '[' => ']',
      ];

      $keyStack = [];
      for($i = 0; $i <$sLength; $i ++){
        if(array_key_exists($s[$i], $keySet)){
          $keyStack[] = $keySet[$s[$i]];
        }elseif(array_pop($keyStack) !== $s[$i]){
          return false;
        }
 
      }
      return empty($keyStack);
        
    }

    echo isValid("({[]})");

echo PHP_EOL;
//Merge two sorted list to one sorted
// Definition for a singly-linked list.
 class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val = 0, $next = null) {
         $this->val = $val;
         $this->next = $next;
     }
 }

/**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
function mergeTwoLists($list1, $list2) {
    $dummy = new ListNode();
    $head = $dummy;

    while($list1 != null && $list2 != null){
      if($list1->val <= $list2->val){
        $dummy->next = $list1;
        $list1 = $list1->next;
      }else{
        $dummy->next = $list2;
        $list2 = $list2->next;
      }

      $dummy = $dummy->next;
    }

    if($list1 != null){
      $dummy->next = $list1;
    }elseif($list2 != null){
      $dummy->next = $list2;
    }
    return $head->next;
    
}

//echo mergeTwoLists([1,2,3], [2,3,4]);

echo PHP_EOL;
function merge(&$nums1, $m, $nums2, $n) {
  $nums1 = array_splice($nums1, 0, ($m));
  $nums1 = array_merge($nums1, $nums2);
  sort($nums1);
  return $nums1;

}

$n1 = [1,2,3,0,0,0];
$n2 = [2,3,4];
$m = 3;
$n = 3;
print_r(merge($n1, $m, $n2, $n));


echo PHP_EOL;
//remove duplicates from sorted array, Then return the number of unique elements in nums. Only show in Integar.
/**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
      $removed = array_unique($nums);
      return count($removed);
  }
$nums = [1,1,2,3,3,4,5];
print_r(removeDuplicates($nums));

echo PHP_EOL;

//remove duplicates from sorted array and display the array
/**
     * @param Integer[] $nums
     * @return Array
     */
    function removeDuplicate(&$nums) {
      $removed = array_unique($nums);
      $new_arr = [];
        foreach($removed as $val){
          $new_arr[] = $val;
          print_r($new_arr);
        }

  }
$nums = [1,1,2,3,3,4,5];
print_r(removeDuplicate($nums));

echo PHP_EOL;
//only specific duplicate numbers will be removed, other duplicate number can be there.
/**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
      $length = count($nums);
      $k = 0;
      for($i = 0; $i <$length; $i++){
        if($nums[$i] !== $nums[$val]){
           $nums[$k] = $nums[$i];
           $k++;
        }              
      }
      return $k; 
  }
$nums = [1,2,2,3,4,5,5,5, 4]; $val = 5;
echo removeElement($nums, $val);

echo PHP_EOL;

/**
     * @param String $s
     * @return Boolean
     */
    function isPalindromeText($s) {
      $converted_input = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));
      if(strrev($converted_input) === $converted_input){
          return true;
      }
    }

    echo isPalindromeText('A man, a plan, a canal: Panama');

echo PHP_EOL;    
    //Happy Number 
    class Solution {

      /**
       * @param Integer $n
       * @return Boolean
       */

    function isHappy($n) {
      if ($n == 1 || $n == 19 || $n == 68 || $n == 82 || $n == 100) return true;
        if ($n == 2 || $n == 4 || $n == 16) return false;
        
        $n = (string)$n;
        $sum = 0;
        for ($i=0; $i < strlen($n); $i++)
        {
            $sum += ($n[$i] * $n[$i]);
        }

        return $this->isHappy($sum);
       }

}

$n = (string)19;
//echo $happy = new Solution($n);

//Given an integer array nums, return true if any value appears at least twice in the array,
// and return false if every element is distinct.

function duplicate($arr){
  return count(array_unique($arr)) !== count($arr);
    
}

echo duplicate([1,2,3,4]);

function containsDuplicate($nums){
        sort($nums);
        $count = count($nums);

        for ($i = 1; $i < $count; $i++) {
            if ($nums[$i] === $nums[$i - 1]) {
                var_dump($nums[$i - 1]);
                return true;
            }
        }

        return false;
    }

$nums = [1,2,3,4];
echo 'Contains Duplicate' . containsDuplicate($nums) . PHP_EOL;

// 
function missingNumber($nums) {
  sort($nums);
  $total = [];

  for($i = 0; $i <= count($nums); $i++){
      array_push($total, $i);
      var_dump($total);
      }
      $result = array_diff($total, $nums);
      return reset($result);
    }


echo 'The missing numer is:  ' . missingNumber([0,1,2,3,4,5,7]);

echo PHP_EOL;

///Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

//Note that you must do this in-place without making a copy of the array.

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

print_r(move_zero_to_end($array1)) . 'Move zeo to end';

//

echo PHP_EOL;

/**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
      $s = array_reverse($s);
      return $s;

  }
$s = ["h","e","l","l","o"];
 print_r(reverseString($s));


echo PHP_EOL;
//PHP leap year:

class Solutions{
	function determining_leap_years($year){
	if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) { 
        return 'is a leap year'; 
        } else { 
        return 'not a leap year'; 
        } 
}
}

$checkYear = new Solutions();
echo $checkYear->determining_leap_years(2009);

echo PHP_EOL;

//return summation of first array + last value of array + total number of array

function summation($arr){
  // write your code here  
  return reset($arr) + end($arr) + count($arr);   
}


echo PHP_EOL;

//Fibonacci display with php 0 1 1 2 3 5 8 13 21 34 55 89 144
$num = 12;

function fibonacci($num){
  if($num == 0) return 0;
  elseif($num == 1) return 1;
  else{
    return (fibonacci($num -1) + fibonacci($num -2));
  }
}
for($i = 0; $i <= $num; $i++){
  echo fibonacci($i) . ' ';
}

echo PHP_EOL;
//new way fibonaacii

function Fib($n)
{
    if ($n <= 1) {
        return $n;
    }
    else {
        return Fib($n - 1) + Fib($n - 2);
    }
}

echo Fib(12);

echo PHP_EOL;

//Incomplete ** 350. Intersection of Two Arrays II

class Solution2 {
  /**
   * @param Integer[] $nums1
   * @param Integer[] $nums2
   * @return Integer[]
   */
  function intersect($nums1, $nums2) {
      if(count($nums2) >1 && count(array_unique($nums2)) !== count($nums2) ) {
          $inter = array_intersect($nums1, $nums2);
          return $inter;}
      else{
          $inter = array_intersect($nums1, $nums2);
          $inter1 = array_unique($inter);
           return $inter1;
      }   
  }
}

$nums1 = [1,2,2,1]; //[4,9,5] //[1,2,2,1]
$nums2 = [2,2]; //[9,4,9,8,4] //[1,2]
$inter = new Solution2();
print_r($inter->intersect($nums1, $nums2));



echo PHP_EOL;
//Reverse Vowels of a String - LeetCode #9 - PHP

/**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
      //convert the string to array
      $strArr = str_split($s);
      //get the vowel alphabet in array
      $vowel = [ 'a', 'e', 'i', 'o', 'u'];

      $newStack = []; //to add the
      $vowelPos = [];
      //check in the converted array string if vowels are there 
      //and keep them in a new array $new []
      foreach($strArr as $key => $value){
          if(in_array(strTolower($value), $vowel)){
              $newStack[] = $value;
              $vowelPos[] = $key;
          }
      }
      //reverse the array
      $reversed = array_reverse($newStack);
      //loop to vowels position and put them back into strArr
      foreach($vowelPos as $pos => $key){
          $strArr[$key] = $reversed[$pos];
      }
      return implode('', $strArr);

  }

  echo reverseVowels('hello') . ' ';
  echo reverseVowels('leetcode');


  echo PHP_EOL;

  //word pattern - LeetCode #290 - PHP
  /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    
     function wordPattern($pattern, $s) {
      $words = explode(' ', $s);
      if(strlen($pattern) != count($words)){
          return false;
      }
      $a = [];
      $b = [];

      for($i = 0; $i<strlen($pattern); $i++){
          if(isset($a[$pattern[$i]]) && $a[$pattern[$i]] != $words[$i])
          return false;

          if(isset($b[$words[$i]]) && $b[$words[$i]] != $pattern[$i])
          return false;

          $a[$pattern[$i]] = $words[$i];
          $b[$words[$i]] = $pattern[$i];
    }
          return true;      
  }

  $pattern = "abba";
  $s= "dog cat cat dog";

  echo wordPattern($pattern, $s);

  echo PHP_EOL;

//Given an integer n, return true if it is a power of two. Otherwise, return false.

//An integer n is a power of two, if there exists an integer x such that n == 2(x).
/**
     * @param Integer
     * @return Boolean
     */
    function isPowerOfTwo($n) {
       while ($n > 0) {
            if ($n == 1) {
                return true;
            }
            if ($n % 2 === 0) {
                 $n /= 2;
            } else {
                return false;
            }
        }
        return false;
    }

    echo isPowerOfTwo(16);

    //BEst time to buy and sale with PHP



    echo PHP_EOL;
      function maxProfit($prices) {
        $minPrice = $prices[0];
        $maxProfit = 0;

        foreach ($prices as $price) {
          if ($price < $minPrice) {
              $minPrice = $price;
          } else {
              $maxProfit = max($maxProfit, $price - $minPrice);
          }
      }
        return $maxProfit;
      }

echo  'The maximum profit: ' . maxProfit([7,1,5,3,6,4]);

    
echo PHP_EOL;

// String case conversion
//If the input data is abcABC then return ABCabc

function alphabet_conversion($str){
  // write your code here       
  for($i = 0; $i <strlen($str); $i++){
    // if($str[$i] === preg_match('/[A-Z]/', $str))
    //   $str[$i] = strtolower($str[$i]);
     
    // else
    //   $str[$i] = strtoupper($str[$i]);		
    if($str[$i]>='a'&&$str[$i]<='z')
		$str[$i]=strtoupper($str[$i]);
		else
		$str[$i]=strtolower($str[$i]);	
    }
  return $str;		
}

$str = 'abcABC';
echo alphabet_conversion($str);

//28. Find the Index of the First Occurrence in a String

echo PHP_EOL;

function strStr1($haystack, $needle) {
      $occur = strpos($haystack, $needle);

      if($occur !== false){
        echo $occur;
      }
      else return -1; 
    }       

$haystack = 'kadsadbutsad';
$needle = 'sad';
echo strStr1($haystack, $needle);



echo PHP_EOL;
//Given a sorted array of distinct integers and a target value, return the index if the target is found. 
//If not, return the index where it would be if it were inserted in order.

//OR


//Binary search on array by php *** Most important 

function binarySearch($input, $target){
  $left = 0;
  $right = count($input) - 1;

  while($left <= $right){
    $middle = floor(($left + $right) / 2 );
    
    //if middle postion is the target
    if($input[$middle] == $target){
      return $middle;
    }
    //if 
    if($target < $input[$middle]){
      $right = $middle -1;
    }else{
      $left = $middle + 1;
    }
  }
  return $middle;
}

$input = [1, 3, 4, 5, 9, 12, 14, 18, 20, 22];
$target = 19;

echo 'Binary Search Result position is :  ' . binarySearch($input, $target);

echo PHP_EOL;
//Given a string s consisting of words and spaces, return the length of the last word in the string.
//A word is a maximal substring consisting of non-space characters only.

function miles($s){
 $mytrim = trim(preg_replace('/\s+/', ' ', $s));
 //convert string to array.
 $mytrims = explode(' ', $mytrim);
 //get the last word;
  $lenth = $mytrims[count($mytrims) -1];
  //count the last word
  return strlen($lenth);
}

$s = "   fly me   to   the moon  ";
print_r(miles($s));



//
echo PHP_EOL;

function plusOne($digits) {
  $new = implode('', $digits);
  echo $new + 1;
}

echo plusOne([1,2,3]);
echo PHP_EOL;
//Longest Substring Without Repeating Characters - LeetCode #27 ***** Very important

function lengthOfLongestSubstring($s) {
  $max = 0;
  $window = '';
  foreach(str_split($s) as $char){
      if(str_contains($window, $char)){
          $window = substr($window, strpos($window, $char) + 1);
      }
      $window .= $char;
      $max = max($max, strlen($window));
  }
  return $max;
}

$s = 'abcabcbb';
echo lengthOfLongestSubstring($s);

echo PHP_EOL;

//Array Rorate : Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.

function rotate(&$nums, $k) {
  if($k === count($nums)){
      return;
  }elseif($k > count($nums)){
      $k = $k % count($nums);
  }
  for($i = 0; $i < $k; $i++){
      array_unshift($nums, array_pop($nums)); //array_unshift = prepend one or more element to the beginning of array
  }
  return $nums;
}

$nums = [1,2,3,4,5,6,7];
$k = 3;

print_r(rotate($nums, $k));


echo PHP_EOL;
//Given an integer array nums where every element appears three times except for one, 
//which appears exactly once. Find the single element and return it.

function singleNumber($nums) {  
   return array_search(1, array_count_values($nums));
   }

$nums = [2,2,3,2];
echo singleNumber($nums);

// array key search
echo PHP_EOL;

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$people = array(
  2 => array(
    'name' => 'John',
    'fav_color' => 'green'
  ),
  5=> array(
    'name' => 'Samuel',
    'fav_color' => 'blue'
  )
);

//

PHP_EOL;
function binarySearch1($arr, $target) {
  $left = 0;
  $right = count($arr) - 1;
  while ($left <= $right) {
     $mid = floor(($left + $right) / 2);
     // Check if the target value is found at the middle index
     if ($arr[$mid] === $target) {
        return 'Found the Number: ' . $mid;
     }
     // If the target is greater, ignore the left half
     if ($arr[$mid] < $target) {
        $left = $mid + 1;
     }
     // If the target is smaller, ignore the right half
     else {
        $right = $mid - 1;
     }
  }
  // Target value not found in the array
  return 'Not found the Number';
}
// Example usage 1
$sortedArray = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$targetValue = 91;
echo $resultIndex = binarySearch1($sortedArray, $targetValue);


echo PHP_EOL;

//Given the sorted rotated array nums of unique elements, return the minimum element of this array.

function findMin($nums) {
  $left = 0;
  $right = count($nums) - 1;

  while($left < $right){
      $mid = ($left + $right) >> 1;  // >> means shift right

      if($nums[$mid] > $nums[$right]){
          $left = $mid + 1;
      }else{                     
          $right = $mid;
      }
  }

  return $nums[$left];
}

$nums = [3,4,5,1,2];
echo 'The minimum number is:  ' . findMin($nums);

//we can resolve find the minimum "Given the sorted rotated array nums of unique elements, return the minimum element of this array."

function findMin1($nums){
  return min($nums);
}

echo PHP_EOL;
//

function maxProduct($nums) {
  
  $max=$nums[0];
  if(array_product($nums)==1){
      return 1;
  }
  for($i=0;$i<count($nums);$i++){
      $temp=$nums[$i];
      if($temp>$max){
              $max=$temp;
          }
      for($j=$i+1;$j<count($nums);$j++){
          $temp=$temp*$nums[$j];  
          if($temp>$max){
              $max=$temp;
          }
      }
      
  }
  return $max;
}

$nums = [2,3,-2,4];
echo 'The max product in subarray: ' . maxProduct($nums);

echo PHP_EOL;
//Given an integer numRows, return the first numRows of Pascal's triangle.

function generate($numRows) {
  $rows = [];
  for($i =0; $i <$numRows; $i++){
      for($j = 0; $j <= $i; $j++){
          if($j == $i || $j == 0){
              $rows[$i][$j] = 1;
          }else{
              $rows[$i][$j] = $rows[$i -1][$j -1] + $rows[$i-1][$j];
          }
      }
  }
  return $rows;
}

$numRows = 5;
print_r(generate($numRows));

echo PHP_EOL;
//190. Reverse Bits

function reverseBits($n) {
  $answer = 0;
  for($i =0; $i < 32; $i++){
      $answer = $answer * 2 + ($n & 1);
      $n >>= 1;
  }
  return $answer;  
}

$n = '00000010100101000001111010011100';
echo reverseBits($n);


//
echo PHP_EOL;

// Outer loop for rows
for ($i = 1; $i < 7; $i++) {
  // Inner loop for columns
  for ($j = 1; $j < 7; $j++) {
      // Check if it's the first column
      if ($j == 1) {
          // Display the product of $i and $j, left-padded to 2 characters
          echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
      } else {
          // Display the product of $i and $j, left-padded to 4 characters
          echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
      }
  }
  // Move to the next line after each row is printed
  echo "\n";
}

echo PHP_EOL;
//Find all Prime Numbers less than the given Number

function isPrime($n) 
{ 
    // Corner case 
    if ($n <= 1) 
        return false; 
  
    // Check from 2 to n-1 
    for ($i = 2; $i < $n; $i++) 
        if ($n % $i == 0) 
            return false; 
  
    return true; 
} 
  
// Function to print primes 
function printPrime($n) 
{ 
    for ($i = 2; $i <= $n; $i++)  
    { 
        if (isPrime($i)) 
            echo $i . " "; 
    } 
} 
  
// Driver Code 
$n = 7; 
printPrime($n); 

echo PHP_EOL;

//134 Gas Station
function canCompleteCircuit($gas, $cost) {
    if(array_sum($gas) < array_sum($cost)){
      return -1;
    }

    $total = 0;
    $start = 0;
    for($i = 0; $i <count($gas); $i++){
      $total += $gas[$i] - $cost[$i];

     if($total < 0){
     $total = 0;
     $start = $i + 1;
    }
  }
    return $start;
}

$gas = [1,2,3,4,5];
$cost = [3,4,5,1,2];

echo 'The circuit : ' . canCompleteCircuit($gas, $cost);

echo PHP_EOL;

// - Given a signed 32-bit integer x, return x with its digits reversed.
// If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

function reverse($x) {
        $flag = 1;
        if($x < 0){
          $flag = -1;
        }else{
          $flag = 1;
        }
        $str = $x . "";
        $str = strrev($str);
        $str = $str * $flag;

        if(abs($str) >= pow(2, 31)){
          return 0;
        }else{
          return $str;
        }
}

$x = 321;
echo reverse($x);

