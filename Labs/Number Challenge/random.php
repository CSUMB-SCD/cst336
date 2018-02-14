<?php 

$numbers = array(0,1,2,3);

$numbers[0] = rand(1,10)+1;
$numbers[1] = rand(1,20)+1;
$numbers[2] = rand(1,30) +1;
$numbers[3] = rand(1,40)+1;

foreach ($numbers as $n)
{
    echo $n . '<br>';
}
?>