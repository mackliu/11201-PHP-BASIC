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
//質數判斷方法
$n=96;
$check=false;
for($i=2;$i<$n;$i++){

    if($n%$i==0){
        $check=true;
        break;
    }

}

if($check==false){
    echo $n . "是質數";
}else{
    echo $n . "不是質數";
}


echo "<hr>";
$n=97;

for($i=3;$i<=97;$i++){
    $check=false;
    for($j=2;$j<$i;$j++){
    
        if($i%$j==0){
            $check=true;
            break;
        }
    }
    
    if($check==false){
        echo $i . ",";
    }
}


