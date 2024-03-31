<?php
function is_pair(int $n){
    if($n % 2===0){
        return TRUE;
    }
    else
    return FALSE;
}
menu:
$x= rand(100,1000);
$ch= (string)$x;
$ch0=(int)$ch[0];
$ch1=(int)$ch[1];
$ch2=(int)$ch[2];
if( is_pair($ch0) and is_pair($ch1) and !is_pair($ch2) ){
    echo $x;
}
else
    goto menu;
?>