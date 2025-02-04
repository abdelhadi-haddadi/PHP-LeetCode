<?php
####################################################################################################
# 1800. Maximum Ascending Subarray Sum
####################################################################################################
class Solution
{
    # 📌 @param Integer[] $nums - The input array of positive integers
    # 📌 @return Integer - The maximum sum of an ascending subarray

    function maxAscendingSum($nums)
    {
        # 🎯 Initialize maxSum and currentSum with the first element
        $maxSum = $currentSum = $nums[0];

        # 🔄 Loop through the array to find the max ascending subarray sum
        for ($i = 1; $i < count($nums); $i++) { // Fixed loop condition
            if ($nums[$i] > $nums[$i - 1]) {  # ✅ If current number is greater, extend subarray
                $currentSum += $nums[$i]; 
            } else { # 🔄 If not, start a new subarray
                $currentSum = $nums[$i];
            }
            # 🏆 Update the maximum sum found so far
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum; # 🔥 Return the final result
    }
}

# 🛠️ Test Cases
$solution = new Solution();
$nums1 = [10, 20, 30, 5, 10, 50];
$nums2 = [10, 20, 30, 40, 50];
$nums3 = [12, 17, 15, 13, 10, 11, 12];

echo $solution->maxAscendingSum($nums1) . "\n"; // Output: 65 🎉
echo $solution->maxAscendingSum($nums2) . "\n"; // Output: 150 🚀
echo $solution->maxAscendingSum($nums3) . "\n"; // Output: 33 ✅
?>

