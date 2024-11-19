<!-- QUESTION :-  -->
<!-- Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.

Consider the number of elements in nums which are not equal to val be k, to get accepted, you need to do the following things:

Change the array nums such that the first k elements of nums contain the elements which are not equal to val. The remaining elements of nums are not important as well as the size of nums.
Return k -->

<!-- ANSWERE -->
<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val) {
    $k = 0;
    for($i=0;$i < count($nums);$i++)
    {
        if($nums[$i] !== $val)
        {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }

    return $k;
}
}

$solution = new Solution();
$nums = [3,2,2,3];
$val = 3;
$output = $solution->removeElement($nums,$val);

echo $output . "\n";

$modifiedArray = array_slice($nums, 0, $output);
print_r($modifiedArray);


?>