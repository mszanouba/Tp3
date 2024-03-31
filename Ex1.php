<?php
echo "<ul>";
for($i=0; $i<=1000; $i++){
 $s=0;
 $temp=$i;
 while($temp >0){
 $r= $temp % 10;
 $s += pow($r,3);
 $temp /= 10;
}
if($s == $i)
  echo "<li> $i </li>";
}
echo "</ul>";
?>
