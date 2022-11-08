<?php
//implementation of selection sort
function selection_sort(&$array, $length){
    
    for($i=0;$i<$length;$i++)
    {
        $min=$i;
        for($j=$i+1;$j<$length;$j++)
        {
            //get the smallest number from the rest of array
            if($array[$j] < $array[$min])
            {
                $min=$j;
            }
        }
        //swap array[i] with array[min] 
        if ($array[$i] > $array[$min])
		{
			$tmp = $array[$i];
			$array[$i] = $array[$min];
			$array[$min] = $tmp;
		}
    }
}
$array=[5,4,6,1,2,0];
$length=count($array);
selection_sort($array, $length);
for ($i = 0; $i < $length; $i++)
{
    echo $array[$i] . " ";
}
