# leetcode-solutions

This repository contains my solutions to LeetCode problems using PHP. Each solution is explained with the approach I used and references to the original problem.

## Problem 1: Merge Sorted Arrays
- **LeetCode Problem URL**: [Merge Sorted Arrays](https://leetcode.com/problems/merge-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150)
- **Description**: Merge two sorted arrays into one sorted array.
- **Approach**: Use two pointers to merge the arrays in linear time.
- **Solution**: [merge-sorted-arrays.php](https://leetcode.com/problems/merge-sorted-array/post-solution/?submissionId=1457111695)

<!-- ------------------------------------------------------------------------------------------------------------- -->
## Problem 2: Remove Element from Array
- **LeetCode Problem URL**: [Remove Element](https://leetcode.com/problems/remove-element/description/?envType=study-plan-v2&envId=top-interview-150)
- **Description**: Given an array nums and a value val, remove all occurrences of val in the array. The relative order of the elements may be changed. Do not use extra space; modify the array in place.
- **Approach**: Use two pointers to iterate through the array. One pointer keeps track of the next available position in the array where an element different from val should be placed.
- **Solution**: [remove_element_from_array.php](https://leetcode.com/problems/remove-element/?envType=study-plan-v2&envId=top-interview-150)

<!-- -------------------------------------------------------------------------------------------------------------- -->

## Problem 3: Remove Duplicate Element from Array
- **LeetCode Problem URL**: [Remove Duplicate Element](https://leetcode.com/problems/remove-duplicates-from-sorted-array/?envType=study-plan-v2&envId=top-interview-150)
- **Description**: Given a sorted array, remove the duplicates in-place such that each element appears only once. The function should return the new length of the array after removing the duplicates. Do not use any extra space for another array. You must modify the given array in place and return the new length
- **Approach**: removes duplicates from a sorted array in place with optimal time and space complexity. The key idea is to use two pointers: one to iterate through the array and the other to track the position of unique elements.
- **Solution**: [remove_duplicate_element_from_array.php](https://leetcode.com/problems/remove-duplicates-from-sorted-array/?envType=study-plan-v2&envId=top-interview-150)


<!-- -------------------------------------------------------------------------------------------------------------- -->
## How to Run:
1. Clone this repository: `git clone https://github.com/vaishnavi9623/leetcode-solutions.git`
2. Navigate to the problem folder (e.g., `arrays`).
3. Run the PHP file using the command: `php filename.php`.
