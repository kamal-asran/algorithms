<?php
// implemention of recursive Binary Search
function binarySearch($arr, $left, $right, $value)
{
    if ($right >= $left)
    {
            $mid = ceil($left + ($right - $left) / 2);

            // If value equal the middle 
            if ($arr[$mid] == $value)
                return floor($mid);

            //search in the right half
            if ($arr[$mid] > $value)
                return binarySearch($arr, $left,$mid - 1, $value);

            //search in the left half
            return binarySearch($arr, $mid + 1,
                                $right, $value);
    }
    //if element is not found
    return -1;
}

$arr = array(2, 3, 4, 10, 40);
$length = count($arr);
$value = 10;
$$result = binarySearch($arr, 0, $length - 1, $value);
if(($$result == -1))
    echo "Element is not present in array";
else
    echo "Element is present at index ".$$result;
?>
