<!DOCTYPE html>
<html>
<head>
    <title>九九乘法表</title>
    <style>
        table {
            border-collapse: collapse; /* 設定 table 的線為單線 */
            width: 85%; /* 設定 table 的寬度為 85% */
            box-shadow: 2px 2px 2px gray; /* 設定 table 的陰影 */
        }
        td {
            border: 1px solid lightgray; /* 設定 td 的線為淺灰色 */
            padding: 5px; /* 設定 td 內容的 padding 為 5px */
        }
    </style>
</head>
<body>
    <table>
        <?php
        // 使用 for 迴圈產生九九乘法表，$i 代表第一個數字，$j 代表第二個數字
        for ($i = 1; $i <= 9; $i++) {
            // 使用 <tr> 元素代表表格中的一行
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                // 使用 <td> 元素代表表格中的一個儲存格，印出乘法表中的一項
                echo "<td>" . $i . " x " . $j . " = " . $i * $j . "</td>";
            }
            // 使用 </tr> 元素代表表格中的一行結束
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
