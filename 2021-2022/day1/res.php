<?php
//get data
$data = fopen('data.txt', 'r');
// data to array
$dataArray = explode("\n", fread($data, filesize('data.txt')));

$intArray = array_map(
    function($value) { return (int)$value; },
    $dataArray
);

$dataArray1 = array(199,
    200,
    208,
    210,
    200,
    207,
    240,
    269,
    260,
    263);
//store the last checked value
$lastChecked = $intArray[1];

$i = 0;
foreach($intArray as $key => $value)
{
    //compare the current array value with the last stored one
    if($value >= $lastChecked)
    {
        echo $value . 'next';
        echo ">";
        echo $lastChecked . 'last';
        echo "===";
        echo "increased\n";
        $i++;
        echo $i . "\n";
    }else{
        echo $value;
        echo "<";
        echo $lastChecked;
        echo "===";
        echo "decreased\n";
    }

    //store the current checked value from the array
    $lastChecked = $value;
}
echo  "\n" . 'Result is :' . $i;