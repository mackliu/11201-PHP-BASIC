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

$result=sort($d);

echo "<pre>";
print_r($d);
echo "</pre>";

echo "<br>";
echo $result;
