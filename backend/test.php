<?php

include('./interval-list.php');


$a=array("a");
unset($a[0]);
print_r($a);

$arr = new IntervalList();

$arr->add(1,2);
$arr->add(3,4);
//$arr->add(1,2);
$arr->remove(1,2);
$arr->add(3,5);
$arr->add(3,4);

print_r($arr);

?>
