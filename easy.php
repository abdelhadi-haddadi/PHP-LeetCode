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

<?php
####################################################################################################
# 1790. Check if One String Swap Can Make Strings Equal
####################################################################################################

class Solution {

    /**
     * @param String $s1 📝
     * @param String $s2 📝
     * @return Boolean ✅ or ❌
     */
    
    function areAlmostEqual($s1, $s2) {
        // If the strings are already equal, return true ✅
        if ($s1 === $s2) {
            return true; // 🎉 No swap needed!
        }

        $diff = []; // 📌 Store index differences

        // 🔍 Find positions where s1 and s2 differ
        for ($i = 0; $i < strlen($s1); $i++) {
            if ($s1[$i] !== $s2[$i]) {
                $diff[] = $i;
            }
        }

        // 🔄 Check if swapping two characters makes them equal
        return count($diff) === 2 && 
               $s1[$diff[0]] === $s2[$diff[1]] && 
               $s1[$diff[1]] === $s2[$diff[0]];
    }
}

// 🚀 Example test cases
$solution = new Solution();
echo $solution->areAlmostEqual("bank", "kanb") ? "✅ True\n" : "❌ False\n"; // ✅ True
echo $solution->areAlmostEqual("attack", "defend") ? "✅ True\n" : "❌ False\n"; // ❌ False
echo $solution->areAlmostEqual("kelb", "kelb") ? "✅ True\n" : "❌ False\n"; // ✅ True

?>
<?php
####################################################################################################
# 88. Merge Sorted Array
####################################################################################################
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $arr = [] ;
        for ($i = 0 ; $i < $m ; $i++){
            if($nums1 != 0 ){
                $arr[] = $nums1[$i];
            }
        }
        for ($j = 0 ; $j < $n ; $j++){
            if($nums2 != 0 ){
                $arr[] = $nums2[$j];
            }
        }
        sort($arr);
        $nums1 = $arr;
    }
}
?>

<?php
####################################################################################################
# 3160. Find the Number of Distinct Colors Among the Balls
####################################################################################################

class Solution {

    /**
     * @param Integer $limit
     * @param Integer[][] $queries
     * @return Integer[]
     */
    function queryResults($limit, $queries) {
        $ballColors = [];
        $colorCount = [];
        $result = [];

        foreach ($queries as [$ball, $color]) {
            if (isset($ballColors[$ball])) {
                $prevColor = $ballColors[$ball];

                if (--$colorCount[$prevColor] === 0) {
                    unset($colorCount[$prevColor]);
                }
            }
            $ballColors[$ball] = $color;
            $colorCount[$color] = ($colorCount[$color] ?? 0) + 1;
            $result[] = count($colorCount);
        }

        return $result;
    }
}
?>
