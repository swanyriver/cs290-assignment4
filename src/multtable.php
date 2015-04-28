<?php

$getKeys = array();
$getKeys[] = 'min-multiplicand';
$getKeys[] = 'max-multiplicand';
$getKeys[] = 'min-multiplier';
$getKeys[] = 'max-multiplier';

//check that all four get paramaters are provided and integers
$missingParam = 0;
$badParam = 0;
foreach ($getKeys as $value) {
    if (! isset($_GET[$value])){
        echo "Missing parameter $value.<br>";
        $missingParam = 1;
    }
    else if(! is_int($_GET[$value])){
        echo "$value must be an integer.<br>";
        $badParam = 1;
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
if($min_mc>$max_mc){
    echo "Minimum multiplicand larger than maximum.<br>";
    return;
}

if($min_mp>$max_mp){
    echo "Minimum multiplier larger than maximum.<br>";
    return;
}

echo "all tests passed";


?>