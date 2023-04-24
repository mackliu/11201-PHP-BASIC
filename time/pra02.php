<h2>月曆</h2>
<?php
$today=strtotime("now");
$month=date("n");
$days=date("t");
$firstDate=date("Y-n-1");
$finalDate=date("Y-n-t");
$firstDateWeek=date("w",strtotime($firstDate));
echo "月:".$month;
echo "<br>";
echo "天數:".$days;
echo "<br>";
echo "第1天:".$firstDate;
echo "<br>";
echo "最後1天:".$finalDate;
echo "<br>";
echo "第1天星期:".$firstDateWeek;
echo "<br>";



