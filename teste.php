<?php

$arr1 = array('arr1','arr2');
$arr2 = array('arr3', 'arr4', 'arr5');

foreach($arr1 as $arr){
    echo $arr;
    foreach($arr2 as $err){
        echo $err;
    }
}