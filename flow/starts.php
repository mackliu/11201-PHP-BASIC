<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h3>直角三角形</h3>
<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";

}
?>

<h3>倒直角三角形</h3>

<?php
for($i=0;$i<5;$i++){

    for($j=0;$j<(5-$i);$j++){
        echo "*";
    }
    echo "<br>";

}
?>
<h3>正三角形</h3>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>

<h3>菱形一</h3>

<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<(4-$i);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($i*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

for($i=0;$i<4;$i++){
    for($j=0;$j<$i+1;$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<((3-$i)*2+1);$k++){
        echo "*";
    }
    echo "<br>";
}

?>

<h3>菱形二</h3>
<?php
$n=18;

$n=($n%2==0)?$n+1:$n;

$tmp=0;
for($i=0;$i<$n;$i++){

    /* if($i<5){
        $tmp=$i;
    }else{
        $tmp=8-$i;
    } */

    $tmp=($i<ceil($n/2))?$i:$n-1-$i;

    for($j=0;$j<(ceil($n/2)-1-$tmp);$j++){
        echo "&nbsp;";
    }

    for($k=0;$k<($tmp*2+1);$k++){
        echo "*";
    }
    echo "<br>";  

}

?>