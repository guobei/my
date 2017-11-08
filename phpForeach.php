<?php
/**
 * Created by PhpStorm.
 * User: Guobei
 * Date: 2017/11/6
 * Time: 14:03
 */
function makeRange($length)
{
    $dataset = [];
    for($i = 0; $i<$length; $i++)
    {
        $dataset[] = $i;
    }
    return $dataset;
}

$customRange = makeRange(1000000);
foreach ($customRange as $i){
    echo $i,PHP_EOL;
}