<?php


$arr =array(1,2,3,4,5,6,7,8,9);
$arry= [array(1 ,array(1,2,3,4,5)), array(2,array(6,7,8,9))];

foreach ($arry as $ar){

    print_r( $ar) ;
}