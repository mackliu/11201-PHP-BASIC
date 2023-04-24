<?php
$str="今天天氣很好";
$str2="Today is a good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo "<h3>substr()</h3>";
echo substr($str,0,6);
echo "<br>";
echo substr($str2,0,2);

echo "<h3>mb_substr()</h3>";
echo mb_substr($str,0,2);
echo "<br>";
echo mb_substr($str2,0,2);

echo "<h3>中英混合取子字串</h3>";
$str3="Today 真是個 good day";
echo $str3;
echo "<br>";
echo mb_substr($str3,0,8);
echo "<br>";

echo "<hr>";
$str="    今天 天氣 很好    ";
$str2=" 今天 天氣 很好 ";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";

echo trim($str);
echo "<br>";
echo trim($str2);
echo "<br>";
echo "<hr>";
$str="YA";
echo str_repeat($str,10);
echo "<hr>";
$str="今天天氣很好";
$replace="很糟";
echo str_replace("很好",$replace,$str);
echo "<br>";
//echo str_replace("很好",$replace,str_replace("天","日",$str));
echo str_replace(["天","很好"],["日",$replace],$str);

echo "<hr>";
$str="生成式人工智慧（Generative AI）風潮席捲各界，其在工業製造領域也發揮關鍵作用，一如在上週登場的「2023漢諾威工業展」，也對AI正滲透工業設計與製造有諸多討論。達梭系統大中華區副總裁Samson Khaou則表示，生成式AI不只協助針對既有產品設計優化，更可進一步重新改善設計。";
$ex=explode("，",$str);
echo $str;
echo "<br>";
echo "<pre>";
print_r($ex);
echo "</pre>";
$file="list.doc";
$sub=explode(".",$file);
echo "<pre>";
print_r($sub);
echo "</pre>";
echo $sub[1];

echo "<hr>";
echo implode(",",$ex);
echo "<br>";
echo join(",",$ex);

echo "<hr>";
$str="今天天氣很好";
$search="天氣";
echo $str;
echo "<br>";
echo $search;
echo "<br>";
echo mb_strpos($str,$search);
echo "<hr>";

$str="今天天氣很好";
$str2="Today is a good day";

echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo mb_strlen($str);
echo "<br>";
echo mb_strlen($str2);


echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";