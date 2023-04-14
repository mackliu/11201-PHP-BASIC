<?php
$score=90;

if($score>60){
    echo "成績=".$score;
    echo "<br>";
    echo "恭喜及格了~~";
}else{
    echo "成績=".$score;
    echo "<br>";
    echo "請再接再厲~~";
}

echo "<hr>";

$level="B";

switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "是否無心學業?";

}
