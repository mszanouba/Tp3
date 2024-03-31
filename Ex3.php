<?php
$N= rand(100,1000);
echo " le nombre c'est :", $N,"</br>";
$M=0;
$temp=1;
 while($M != $N){
 $M= rand(100,1000);
 if($N == $M)
    break;
 else
    $temp++;
 }
echo "On a effectue ", $temp,"de tirages pour obtenir une autre fois le nbr:", $M;


//m2
/*
for($i=1; $N !=$M ; $i++){
    $M= rand(100,1000);
 if($N == $M)
    break;
}
echo "On a effectue ", $i,"de tirages pour obtenir une autre fois le nbr:", $M;
*/
?>
