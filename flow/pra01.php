<h1>閏年判斷</h1>
<ul>
    <li>公元年份除以4不可整除，為平年。</li>
    <li>公元年份除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年份除以100可整除但除以400不可整除，為平年。</li>
</ul>
<p>轉換描述為:</p>
<ul>
    <li><span style='color:red'>公元年份除以4可整除，為閏年。</span></li>
    <li>
        公元年份除以4可整除但除以100不可整除，為閏年。
        <div>1.公元年份除以4可整除</div>
        <div>2.除以100不可整除</div>
        <div>兩個條件要同時成立，使用AND &&</div>

    </li>
    <li><span style='color:red'>公元年份除以400可整除但除以100不可整除，為閏年。</span>
        <div>1.公元年份除以4可以整除 => 閏年</div>
        <div>2.公元年份除以100不可以整除 =>閏年</div>
        <div>3.公元年份除400可以整除 => 閏年</div> 
    </li>
</ul>


<?php
$year=2400;
if($year %4 ==0){
    echo $year. "是閏年";
}else{
    echo $year. "不是閏年";
}

echo "<hr>";


if(($year %4 == 0) && ($year %100 !=0) ){
    echo $year. "是閏年";
}else{
    echo $year. "不是閏年";
}
echo "<hr>";


if(($year %4 == 0) && ($year %100 !=0) || ($year % 400 ==0)){
    echo $year. "是閏年";
}else{
    echo $year. "不是閏年";
}


?>