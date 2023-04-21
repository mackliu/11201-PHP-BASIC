<style>
    .area-1,.area-2{
        display:inline-block;
        width:35px;
        height:35px;
        border:1px solid #ccc;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        margin:0.5rem;
    }
    .area-1{
        background-color: #0f0;
    }
    .area-2{
        background-color: orange;
    }
</style>
<?php
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j = ". $i*$j;
    }
}

/* echo "<pre>";
print_r($nine);
echo "</pre>"; */
foreach($nine as $k => $str){
    echo $str;
    if($k%9==8){
        echo "<br>";
    }
}

echo "<hr>";
echo "<h1>威力彩選號</h1>";

$lotto=[];

while(count($lotto)<6){
    $tmp=rand(1,38);

   // echo "亂數產生的數字:".$tmp;
    if(!in_array($tmp,$lotto)){
        //echo "沒有重覆的數字,所以寫入陣列".$tmp;
        $lotto[]=$tmp;
    }/* else{
        //echo "有發生重覆的數字".$tmp;
    } */
/*     echo "<pre>";
    print_r($lotto);
    echo "</pre>"; */
}

foreach($lotto as $num){
    echo "<span class='area-1'>" . $num . '</span>';
}
echo "<br>";
echo "<span class='area-2'>".rand(1,8)."</span>";

echo "<hr>";
echo "<h1>找出五百年內的閏年</h1>";
echo "2023 ~ 2523 <br>";

$years=[];

for($year=2023;$year<2523;$year++){
    
    if(($year %4 == 0) && ($year %100 !=0) || ($year % 400 ==0)){
        $years[]=$year;
    }
}

foreach($years as $year){
    echo $year . "<br>";
}

$t=2351;

if(in_array($t,$years)){
    echo $t."是閏年";
}else{
    echo $t."是平年";

}
if(array_search($t,$years)!=false){
    echo $t."是閏年";
}else{
    echo $t."是平年";

}

echo "<hr>";
echo "<h1>計算天干地支年</h1>";
echo "2023 ~ 2523 <br>";

$sky=["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$land=["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];

$skyland=[];
for($i=0;$i<60;$i++){
    $skyland[]=$sky[$i%10] . $land[$i%12];
}

$year=2053;
$startYear=1024;  //甲子年
echo "給定西元年".$year;
$index=($year-$startYear)%60;
echo "<br>天干地支年為".$skyland[$index];
/* echo "<pre>";
print_r($skyland);
echo "</pre>"; */

echo "<hr>";
echo "<h1>反轉陣列</h1>";
echo '給定陣列$a=[2,4,6,1,8]  反轉後  $a=[8,1,6,4,2]';


$a=[2,4,6,1,8,9];
echo "<pre>";
echo "原陣列:<br>";
print_r($a);
echo "</pre>";
$times=ceil(count($a)/2);
$maxIndex=count($a)-1;

for($i=0;$i<$times;$i++){
    $tmp=$a[$i];
    $a[$i]=$a[$maxIndex-$i];
    $a[$maxIndex-$i]=$tmp;
}

echo "<pre>";
echo "反轉陣列:<br>";
print_r($a);
echo "</pre>";
?>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>