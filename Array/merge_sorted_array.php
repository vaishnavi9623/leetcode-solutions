<!--  QUESTION : - 
 You are given two integer arrays nums1 and nums2, sorted in non-decreasing order, and two integers m and n, representing the number of elements in nums1 and nums2 respectively.

Merge nums1 and nums2 into a single array sorted in non-decreasing order.

The final sorted array should not be returned by the function, but instead be stored inside the array nums1. To accommodate this, nums1 has a length of m + n, where the first m elements denote the elements that should be merged, and the last n elements are set to 0 and should be ignored. nums2 has a length of n.

 

Example 1:

Input: nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3
Output: [1,2,2,3,5,6]
Explanation: The arrays we are merging are [1,2,3] and [2,5,6].
The result of the merge is [1,2,2,3,5,6] with the underlined elements coming from nums1. -->

<!-- ANSWERE -->
<?php
class Solution {

/**
 * @param Integer[] $nums1
 * @param Integer $m
 * @param Integer[] $nums2
 * @param Integer $n
 * @return NULL
 */
function merge(&$nums1, $m, $nums2, $n) {
    
    $nums1LastIndex = $m - 1;
    $nums2LastIndex = $n - 1;
    $nums1LastPosition = ($m + $n )- 1;
    while($nums2LastIndex >= 0)
    {
        if($nums1LastIndex >= 0 && $nums2[$nums2LastIndex] < $nums1[$nums1LastIndex])
        {
            $nums1[$nums1LastPosition] = $nums1[$nums1LastIndex];
            $nums1LastIndex--;
        }
        else
        {
            $nums1[$nums1LastPosition] = $nums2[$nums2LastIndex];
            $nums2LastIndex--;
        }
        $nums1LastPosition--;

    }

    return $nums1;

}
}
$nums1 = [1, 2, 3, 0, 0, 0]; // m = 3
$nums2 = [2, 5, 6];          // n = 3
$m = 3;  // number of valid elements in nums1
$n = 3;  // number of elements in nums2
$solution = new Solution();
$solution->merge($nums1, $m, $nums2, $n);
print_r($nums1);

?>