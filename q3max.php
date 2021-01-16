<?php
function maxcons($arr , $n)
{
    $pair_exist = "False";
    sort ($arr , $arr+$n);

    for ($i = 0; $i<$n;$i++){
        if ($arr[$i] < 0){
            if ($arr . $arr+$n . -$arr[$i])
            echo $arr, ".", -$arr[$i];
            $pair_exist = "TRUE";
            }        
    }
break;
}
if ($pair_exist == "FALSE"){
    echo "no pair exist";
}
$arr = array(4,8,9,-4,1,-1,-8,-9);
$n = count($arr)
maxcons($arr , $n);
?>