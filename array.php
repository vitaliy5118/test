<?php
echo "***********************************************************";
echo "START this is array functions test file";
echo "***********************************************************";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$F = function($arr) {
    if (!is_int($arr) && $arr!='43') {
        return $arr;
    }
};

//поменять данные в массиве
$A = array('foo'=>'43',1,2,3,4,5,6,7,8,9,'a','b','c','d',2,1);
//$D = array_reverse($A);
//$y = array_shift($A);
//echo '$y='.$y;
//echo '<br>';

$D =  array_filter($A, $F);

foreach ($D as $value){
    echo "$value";
}

$y = count($A)-1;
for($i=0; $i<count($A)/2; $i++){
    list($A[$i], $A[$y])= array($A[$y], $A[$i]);
    $y--;
}

echo '<br>';
foreach ($A as $value){
    echo "$value";
}

echo '<br>';

$a = 'asd';

echo $a[2];
