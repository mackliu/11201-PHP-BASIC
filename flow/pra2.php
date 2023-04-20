<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <style>
        table{
            border-collapse: collapse;
            width:85%;
            margin:auto;
            box-shadow: 0 0 10px #999;
        }
        td{
            border:1px solid #999;
        }
    </style>
</head>
<body>
    <table>
<?php 
for($j = 1 ;$j <= 9 ; $j++){
  echo "<tr>"  ;

    for($i=1;$i<=9;$i++){
        echo "<td>";
        echo "$j x $i = ";
        echo $j * $i;
        echo "</td>";
    } 
  echo "</tr>"  ;
}

?>
</table>

</body>
</html>







