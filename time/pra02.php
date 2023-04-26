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
$today=strtotime("now");    //取得當前的時間秒數
$month=date("n",$today);    //取得當前的月份
$days=date("t",$today);     //取得當前月份的總天數
$firstDate=date("Y-n-1",$today);    //取得當前月份第一天
$finalDate=date("Y-n-t",$today);    //取得當前月份最後一天
$firstDateWeek=date("w",strtotime($firstDate)); //取得當前月份第一天的星期
$finalDateWeek=date("w",strtotime($finalDate)); //取得當前月份最後一天的星期
$weeks=ceil(($days+$firstDateWeek)/7);  //計算當前月份的天數會佔幾周
$firstWeekSpace=$firstDateWeek-1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)
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
echo "最後1天星期:".$finalDateWeek;
echo "<br>";
echo "周數:".$weeks;
echo "<br>";

//先畫出固定的表頭內容
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

//使用迴圈來畫出當前月的周數
for($i=0;$i<$weeks;$i++){
    echo "<tr>";

    //使用迴圈來畫出當周的天數
    for($j=0;$j<7;$j++){
        echo "<td>";
        if($i==0){  //判斷當周是否為第一周
            if($j<$firstDateWeek){ //如果$j比第1天的星期小，則印出空白日
                echo "&nbsp;";
            }else{

                //如果$j比第1天的星期大，則印出日期
                //日期的公式為 (當周天數-周數*7-第一周的空白日數)
                echo $j+7*$i-$firstWeekSpace;
            }
        }else if($i==$weeks-1){ //判斷當周是否為最後一周
            if($j>$finalDateWeek){  //如果$j比最後一天的星期大，則印出空白日
                echo "&nbsp;";
            }else{

                //如果$j比最後1天的星期大，則印出日期
                //日期的公式為 (當周天數-周數*7-第一周的空白日數)
                echo $j+7*$i-$firstWeekSpace;
            }
        }else{

            //如果$i不是第一周或最後一周，則印出日期
            //日期的公式為 (當周天數-周數*7-第一周的空白日數)
            echo $j+7*$i-$firstWeekSpace;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
