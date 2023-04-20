<?php

$i=0;
while($i<10){
    echo $i*10;
    echo "<br>";
    $i++;
}
echo '$i='.$i;

echo "<hr>";
$i=0;
do{
    echo $i*10;
    echo "<br>";
    $i++;  

}while($i<10);
echo '$i='.$i;