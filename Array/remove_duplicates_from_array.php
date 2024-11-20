<!-- QUESTIONS : - Remove Duplicates from Sorted Array

Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements in nums.

Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things:

Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums.
Return k -->

<!-- ANSWERE -->
<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $k = 1 ;
    for($i = 1 ;$i < count($nums);$i++)
    {
        if($nums[$i] != $nums[$i -1])
        {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }
    return $k;

}
}

$solution = new Solution();
$nums = [1,1,2];
$output = $solution->removeDuplicates($nums);
echo $output;
$modifiedArray = array_slice($nums, 0, $output);
print_r($modifiedArray);

?>