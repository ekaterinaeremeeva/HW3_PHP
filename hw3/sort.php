<?php
require_once("head.php");
require_once("nav.php");
?>
<div>
    <table border=2>
        <tr>
            <th>ФИО</th>
            <th>Месяц</th>
            <th>Зарплата</th>
        </tr>
    <?php
    ksort($salary);
    foreach($salary as $key=>$value){
            $i=0;
            foreach ($value as $month=>$manSalary){
                if ($i==0){
                    echo '<tr><td rowspan='.count($value).'>'.$key.'</td>';
                    $i++;
                }
                echo '<td>'.$month.'</td><td>'.$manSalary.'</td></tr>';
            }
            $summa=array_sum($value);
            echo "<tr><td>Итого</td><td colspan=3>{$summa}</td>";
        }
    ?>
    </table>
</div>
<?php
require_once("footer.php");
?>