<h3>字串取代</h3>
<h4>將”aaddw1123”改成”*********”</h4>
<?php 
$str="afsdfsdfsdafsdf";
echo "<br>";
echo str_replace(['a','d','w',1,2,3],'*',$str);
echo "<br>";
echo str_repeat("*",strlen($str));
?>

<h3>字串分割</h3>
<h4>將”this,is,a,book”依”,”切割後成為陣列</h4>
<?php
$str="this,is,a,book";

$result=explode(",",$str);

echo "<pre>";
print_r($result);
echo "</pre>";

?>
<h3>字串組合</h3>
<h4>將上例陣列重新組合成“this is a book”</h4>
<?php

echo join(" ",$result);


?>
<h3>子字串取用</h3>
<h4>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h4>
<?php

$str="The reason why a great man is great is that he resolves to be a great man";

echo mb_substr($str,0,10) . "...";

?>

<h3>尋找字串與HTML、css整合應用</h3>
<h4>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>    
</h4>
<?php

$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$target="PHP";
$replace="<span style='font-size:32px;color:red'>$target</span>";
echo str_replace($target,$replace,$str);
$split=explode($target,$str);
echo "<br>";
echo join($replace,$split);


?>
<p>&nbsp;</p>
<p>&nbsp;</p>