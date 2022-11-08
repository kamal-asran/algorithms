<?php
//Buble Sort Alogrithm Implementation

function buble_sort(&$array,$length)
{
    for($i=0;$i<$length-1;$i++)
    {
        //i elements are already in order
        for($j=0;$j<$length-$i-1;$j++)
        {
            //swap $array[$j+1] with $array[$j] 
            if($array[$j] > $array[$j+1])
            {
                $tmp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $tmp;
            }

        }
    }

}

$array=[5,4,6,1,2,0];
$length=count($array);
buble_sort($array, $length);
for ($i = 0; $i < $length; $i++)
{
    echo $array[$i] . " ";
}