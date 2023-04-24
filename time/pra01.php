<h2>給定兩個日期，計算中間間隔天數</h2>
<div>2023-04-24</div>
<div>2023-10-07</div>

<?php
date_default_timezone_set("Asia/Taipei");
$start=strtotime("2023-02-26");
$end=strtotime("2023-03-17");

$gap=($end-$start)/(24*60*60);

echo "距離 ".date("Y-m-d",$end)." 還有".$gap."天";
?>


<h2>計算距離自己下一次生日還有幾天</h2>
<?php

$now=strtotime(date("Y-m-d"));
$birthday=strtotime("2023-10-07");
//echo "<br>";
//echo $now;
//echo "<br>";
//echo $birthday;

$days=($birthday-$now)/(24*60*60);

echo "距離下一次的生日 ".date("Y-m-d",$birthday)." 還有".$days."天";
?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<ul>
    <li>2023/04/24</li>
    <li>4月24日 Monday</li>
    <li>2023-4-24 14:9:5</li>
    <li>2023-04-24 14:09:05</li>
    <li>今天是西元2023年4月24日 上班日(或假日)</li>
</ul>
<?php
$today=strtotime('now');
echo "<br>";
echo date("Y/m/d");
echo "<br>";
echo date("n月j日 l");
echo "<br>";
echo date("Y-n-j G:") . (int)date("i").":".(int)date("s");
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo "今天是西元";
echo date("Y年n月j日");
echo date("N")>=6?"是假日":"是工作日";
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




