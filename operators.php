<?php

$check=true;

echo !$check;

echo "<hr>";
$price=125;
echo $price;
$price++;
echo $price;
$price--;
echo $price;
echo ++$price;

echo "<hr>";
$num1=10;
$num2=25;
echo '$num1=' . $num1;
echo "<br>";
echo '$num2=' . $num2;
echo "<BR>";
echo " + => ";
echo $num1+$num2;
echo "<br>";
echo " - => ";
echo $num1-$num2;
echo "<br>";
echo " * => ";
echo $num1*$num2;
echo "<br>";
echo " / => ";
echo $num1/$num2;
echo "<br>";
echo " % => ";
echo $num1%$num2;
echo "<br>";

echo "<hr>";

$name='劉勤永';

['name'=>'劉勤永'];

/*
=>  //胖箭頭  fat arrow
->  //瘦箭頭  arrow
*/

echo "<hr>";
$score=40;
$level=($score >= 60)?'及格':'不及格';

echo $level;