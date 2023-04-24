<style>
    table{
        border-collapse: collapse;
    }
    td{
        border:1px solid gray;
        padding:5px 10px;
    }
</style>
<h2>月曆</h2>
<?php
$today=strtotime("now");
$month=date("n");
$days=date("t");
$firstDate=date("Y-n-1");
$finalDate=date("Y-n-t");
$firstDateWeek=date("w",strtotime($firstDate));
$weeks=ceil(($days+$firstDateWeek)/7);
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
echo "周數:".$weeks;
echo "<br>";

echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
