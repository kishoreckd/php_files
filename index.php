<?php

// conditions
// all the numbers in the array will be >= -1 <= 100
// in each array there will be >= 1 <=2 , -1 values
// only maximum of 5 elements can be present in the array
// print the index which has the maximum sum between each 1s => 1
// print the array with all the sum values => [2, 70, 0, 10, 66]

$array =
    [
        [1,2,3,-1,9],
        [2,3,-1,5,6],
        [5,6,7,-1,8],
        [10,11,12,-1,14],
        [10,11,1,-1,1],
    ];

$values =[];

    for ($i=0;$i<count($array);$i++)
    {
        $check =false;
        $sum=0;
        for ($j=0;$j<count($array);$j++)
        {
            if ($check)
            {
                if ($array[$i][$j]==-1)
                {
                    $check =false;
                }
                else
                {
                    $sum +=$array[$i][$j];
                }
            }
            if ($array[$i][$j]==-1)
            {
                $check= true;
            }
        }
        $values[]=$sum;
    }


   print_r($values);

?>