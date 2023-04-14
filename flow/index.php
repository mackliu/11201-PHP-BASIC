<?php
$score=50;
echo "你的成績為:".$score;
echo "<BR>";
if($score >= 90){
    $level="A";
}else if($score >= 80){
    $level="B";
}else if($score >= 70){
    $levle="C";
}else if($score >= 60){
    $level="D";
}else{
    $level="E";
}

echo "<hr>";

echo "成績等級為:".$level;
echo "<BR>";
echo "成績評語為:";

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
