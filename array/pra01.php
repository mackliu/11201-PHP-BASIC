<style>
    table{
        border-collapse: collapse;
        width:50%;
    }
    td{
        padding:5px 10px;
        border:1px solid #ccc;
    }
</style>

<?php

$students=[
'judy'=>['國文'=>95,
         '英文'=>64,
         '數學'=>70,
         '地理'=>90,
         '歷史'=>84,
        ],
'amo'=>['國文'=>88,
         '英文'=>78,
         '數學'=>54,
         '地理'=>81,
         '歷史'=>71,
        ],
'john'=>['國文'=>45,
         '英文'=>60,
         '數學'=>68,
         '地理'=>70,
         '歷史'=>62,
        ],


];

$subjects=[
    '國文'=>[
        'judy'=>95,
        'amo'=>88,
        'john'=>45,
        'peter'=>59,
        'hebe'=>71
    ],
    '英文'=>[
        'judy'=>64,
        'amo'=>78,
        'john'=>60,
        'peter'=>32,
        'hebe'=>62
    ],
    '數學'=>[],
    '地理'=>[],
    '歷史'=>[],
];

echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td>國文</td>";
echo "<td>英文</td>";
echo "<td>數學</td>";
echo "<td>地理</td>";
echo "<td>歷史</td>";
echo "</tr>";
foreach ($students as $stu => $scores) {
    echo "<tr>";
    echo "<td>$stu</td>";
    foreach($scores as $sub => $score){
        echo "<td>$score</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>