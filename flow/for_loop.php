<?php

for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}

echo '$i='.$i;


echo "<hr>";
$n=21;
//$limit=ceil($n/2);
for($i=1;$i<=ceil($n/2);$i++){
    //echo '$i=' . $i . "=>";
    echo $i*2-1;
    echo ",";
}
echo "<br>";

echo "<hr>";
$n=21;
//$limit=ceil($n/2);
for($i=1;$i<=$n;$i=$i+2){
    //echo '$i=' . $i . "=>";
    echo $i;
    echo ",";
}
echo "<br>";

echo "<hr>";
