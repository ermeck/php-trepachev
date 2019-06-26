<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>005. foreach, while, for</title>
</head>
<body>
    <h2>Работа с foreach</h2>
    <p>
        <h4>Task 1</h4>
        <?php
            $arr = ['html', 'css', 'php', 'js', 'jq'];
            foreach ($arr as $elem) {
                echo $elem . '<br>';
            }
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php 
            $arr = [1, 2, 3, 4, 5];
            $result = 0;
            foreach ($arr as $elem) {
                $result += $elem;
            }
            echo $result;
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php 
            $arr = [1, 2, 3, 4, 5];
            $result = 0;
            foreach ($arr as $elem) {
                $result += $elem * $elem;
            }
            echo $result;
        ?>
    </p>

    <h2>Работа с ключами</h2>
    <p>
        <h4>Task 4</h4>
        <?php 
            $arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
            foreach ($arr as $key => $elem) {
                echo $key . '-' . $elem . '<br>';
            }
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php 
            $arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];
            foreach ($arr as $key => $value) {
                echo $key . ' - зарплата ' .$value. ' долларов<br>';
            }
        ?>
    </p>

    <h2>Циклы while и for</h2>
    <p>
        <h4>Task 6</h4>
        <?php 
            echo 'For<br>';
            for ($i = 1; $i <= 10; $i++) {
                echo $i . '<br>';
            }
            echo '<br>While<br>';
            $i = 1;
            while ($i <= 10) {
                echo $i . '<br>';
                $i++;
            }
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php 
            echo 'For<br>';
            for ($i = 11; $i <=22; $i++) {
                echo $i . '<br>';
            }
            echo '<br>While<br>';
            $i = 11;
            while ($i <= 22) {
                echo $i . '<br>';
                $i++;
            }
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php 
            echo 'While<br>';
            $i = 0;
            while ($i <= 10) {
                echo $i . '<br>';
                $i += 2;
            }

            echo '<br>For<br>';
            for ($i = 0; $i < 10; $i += 2) {
                echo $i . '<br>';
            }
        ?>
    </p>
    <p>
        <h4>Task 9</h4>
        <?php 
            $result = 0;
            echo 'For<br>';
            for ($i = 1; $i <= 5; $i++) {
                $result += $i;
            }
            echo 'Sum = '.$result;

            $result = 0;
            $i = 0;
            while ($i <= 5) {
                $i++;
                $result += $i;
            }
            echo 'Sum = ' .$result;
        ?>
    </p>

    <h2>Задачи</h2>
    <p>
        <h4>Task 10</h4>
        <?php 
            $arr = [2, 5, 9, 15, 0, 4];
            foreach ($arr as $value) {
                if ($value > 3 && $value < 10) {
                    echo $value .'<br>';
                }
            }
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php 
            $arr = [-2, 5, -9, 15, -6, 4];
            $sum = 0;
            foreach ($arr as $value) {
                if ($value < 0) {
                    $sum += $value;
                }
            }
            echo $sum;
        ?>
    </p>
    <p>
        <h4>Task 12</h4>
        <?php 
            $arr = [1, 2, 5, 9, 4, 13, 4, 10];
            foreach ($arr as $value) {
                $i++;
                if ($value === 4) {
                    echo "Theare is 4 in array";
                    break;
                }
            }
        ?>
    </p>
    <p>
        <h4>Task 13</h4>
        <?php 
            $arr = [10, 20, 30, 50, 235, 3000];
            foreach ($arr as $value) {
                $str = (string)$value;
                if ($str[0] == 1 || $str[0] == 2 || $str[0] == 5) {
                    echo $value . '<br>';
                }
            }
        ?>
    </p>
    <p>
        <h4>Task 14</h4>
        <?php 
            $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
            $str = '';
            foreach ($arr as $value) {
                $str .= -$value;
            }
            echo $str;
        ?>
    </p>
    <p>
        <h4>Task 15</h4>
        <?php 
            $week = ['пн', "вт", "ср", "чт", "пт", "сб", "вс"];
            foreach ($week as $day) {
                if ($day === "сб" || $day === "вс") 
                    echo '<p><b>'.$day.'</b></p>';
                else 
                    echo '<p>'.$day.'<p>';
            }
        ?>
    </p>
    <p>
        <h4>Task 16</h4>
        <?php 
            $week = ['пн', "вт", "ср", "чт", "пт", "сб", "вс"];
            $day = 'чт';
            foreach ($week as $value) {
                if ($value === $day) 
                    echo '<p><i>'.$value.'</i></p>';
                else 
                    echo '<p>'.$value.'<p>';
            }
        ?>
    </p>

    <h2>Задачи посложнее</h2>
    <p>
        <h4>Task 17</h4>
        <?php 
            $arr = [];
            for ($i = 1; $i <= 10; $i++) {
                $arr[] = $i;
            }
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 18</h4>
        <?php 
            $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
            $en = []; 
            $ru = [];
            foreach ($arr as $key => $value) {
                $en[] = $key;
                $ru[] = $value;
            }
            echo '<pre>';
            print_r($en);
            print_r($ru);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 19</h4>
        <?php 
            $num = 1000;
            $i = 0;
            while ($num > 50) {
                $i++;
                $num /= 2;
            }
            echo '$num = '. $num . ', $i = ' . $i . '.<br>';

            $num = 1000;
            for ($i = 1; $i < 100; $i++) {
                $num /= 2;
                if ($num < 50) {
                    echo '$num = '. $num . ', $i = ' . $i . '.';
                    break;
                }
            }
        ?>
    </p>
</body>
</html>