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


?>




<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>