<?php
function duplicate($arr , $n)
{
    if ($arr == null or $n <= 0)
         
        return;

    for ($i = $n -1 ; $i>0 ;$i--){
        if($arr[$i] == $arr[$i-1]){
            echo " Last index:" ,$i,"\n";
            echo "Duplicate item:" ,$arr[$i];
            return;
        }
    }

        echo "no duplicate found";
}
$arr = array(1,3,5,5,7,9.11,13,13);
$n = count($arr);
duplicate($arr , $n);
?>