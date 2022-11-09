<?php
// implemention of merge sort algorithm

function merge(&$arr, $left, $mid, $right){
    //get the length for both sides
    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;

    $L = array();
    $R = array();
    /* divid array data to temp arrays L[] and R[] */
    for ($i = 0; $i < $n1; $i++)
        $L[$i] = $arr[$left + $i];
    for ($j = 0; $j < $n2; $j++)
        $R[$j] = $arr[$mid + 1 + $j];
 
    /* compare L and R items and put the smallest in arr */
    $i = 0; // Initial index of first subarray
    $j = 0; // Initial index of second subarray
    $k = $left; // Initial index of merged subarray
    while ($i < $n1 && $j < $n2) {
        if ($L[$i] <= $R[$j]) {
            $arr[$k] = $L[$i];
            $i++;
        }
        else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }

     /* Copy the remaining elements of L[]*/
    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }
 
    /* Copy the remaining elements of R[] */
    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}

function mergeSort(&$arr, $left, $right){
    
    if ($right >= $left)
    {
        $mid = $left + (int)(($right - $left) / 2);
            //right half
            mergeSort($arr, $left,$mid - 1);
            //left half
           mergeSort($arr, $mid + 1,$right);

           merge($arr, $left, $mid, $right);
    }
    //if element is not found
    return -1;
}

$arr = array(12, 11, 13, 5, 6, 7);
$arr_size = sizeof($arr);
 
echo "Given array is \n";
for ($i = 0; $i < $arr_size; $i++)
{
    echo $arr[$i] . " ";
}
 
mergeSort($arr, 0, $arr_size - 1);
 
echo "\nSorted array is \n";
for ($i = 0; $i < $arr_size; $i++)
{
    echo $arr[$i] . " ";
}

?>
