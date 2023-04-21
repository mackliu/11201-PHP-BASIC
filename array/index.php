<?php

$a[1]="A";
$a['001']="B";
$a['name']="mack";
$a['parent_name']="mack";
//$a='cdef';
echo "<pre>";
print_r($a);
echo "</pre>";


$b[]="B";
$b[]="C";
$b[]="D";
$b[]="E";
$b[]="F";
echo "<pre>";
print_r($b);
echo "</pre>";

$c=["A","B",'C'];
//$c[]="D";
$c['total']=4;
$c[]="E";
$c['total']=5;
echo "<pre>";
print_r($c);
echo "</pre>";

echo $a[1];
echo $a['001'];
echo $a['name'];
echo $a['parent_name'];
echo "<br>";
echo $b[0];
echo "<br>";
echo $c[2];
echo "<hr>";
$dd="AAA";
$check=is_array($dd);
if($check){
    echo "是陣列";
}else{
    echo "不是陣列";
}

if(in_array("D",$c)){
    echo "D 在陣列中";
}else{
    echo "D 不在陣列中";

}

$d=["A",9,"C",21,77,3];

echo "<pre>";
print_r($d);
echo "</pre>";

sort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

rsort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

$fill=array_fill(0,25,'hi');
echo "<pre>";
print_r($fill);
echo "</pre>";

echo array_search(9,$d);
echo $d[4];

$keys=array_keys($d);

echo "<pre>";
print_r($keys);
echo "</pre>";

$keys=array_keys($a);

echo "<pre>";
print_r($keys);
echo "</pre>";

$merge=array_merge($a,$b);
echo "<pre>";
print_r($merge);
echo "</pre>";


$seA=serialize($a);
echo $seA;
$ueA=unserialize($seA);
echo "<pre>";
print_r($ueA);
echo "</pre>";

$s=implode(',',$a);
echo $s;
$array=explode(',',$s);
echo "<pre>";
print_r($array);
echo "</pre>";


echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";
echo "<p>&nbsp;</p>";