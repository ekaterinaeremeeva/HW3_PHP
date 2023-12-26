<?php
require_once("head.php");
require_once("nav.php");
?>
<div>
    <form action="" method="post">
        <label>Введите ФИО сотрудника</label>
        <input name="worker">
        <input type="submit" value="Поиск" name="search">
    </form>
    <table border=2>
        <tr>
            <th>ФИО</th>
            <th>Месяц</th>
            <th>Зарплата</th>
        </tr>
    <?php
    $fio=array_filter($salary,function($item){
        return $item=="Иванов Николай";
    },ARRAY_FILTER_USE_KEY);
    foreach($fio as $key=>$value){
        foreach ($value as $month=>$manSalary){
            echo "<p><b>{$key}</b></p>";
            echo "<p>{$month} <b> {$manSalary} руб </b> </p>";
        }
    }
if (isset($_POST['search'])){
    foreach($salary as $key=>$value){
        foreach ($value as $month=>$manSalary){
            if ($key==$_POST['worker']){
                echo '<tr><td>'.$key.'</td>';
                echo '<td>'.$month.'</td><td>'.$manSalary.'</td></tr>';
            }
        }
    }
}
?>
</table>
</div>
<?php
require_once("footer.php");
?>