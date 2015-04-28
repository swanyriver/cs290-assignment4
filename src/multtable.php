<?php

$getKeys = array();
$getKeys[] = 'min-multiplicand';
$getKeys[] = 'max-multiplicand';
$getKeys[] = 'min-multiplier';
$getKeys[] = 'max-multiplier';

//check that all four get paramaters are provided and integers
$missingParam = false;
$badParam = false;
foreach ($getKeys as $value) {
    if (! isset($_GET[$value])){
        echo "Missing parameter $value.<br>";
        $missingParam = true;
    }
    else if(! is_numeric($_GET[$value])){
        echo "$value must be an integer.<br>";
        $badParam = true;
    }
}
if ($missingParam || $badParam){
    return;
}

//capture get paramaters
$min_mc = intval($_GET['min-multiplicand']);
$max_mc = intval($_GET['max-multiplicand']);
$min_mp = intval($_GET['min-multiplier']);
$max_mp = intval($_GET['max-multiplier']);


//error check get paramaters
$incorect_param = false;
if($min_mc>$max_mc){
    echo "Minimum multiplicand larger than maximum.<br>";
    $incorect_param = true;
}

if($min_mp>$max_mp){
    echo "Minimum multiplier larger than maximum.<br>";
    $incorect_param = true;
}

if($incorect_param){
    return;
}

echo "all tests passed";


?>