<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>09. Практика на комбинации стандартных функций</title>
</head>
<body>
    <p>
        <h4>Task 1</h4>
        <?php
            $a = (range(1, 15));
            shuffle($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';

            echo array_sum($a)/count($a);
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php
            $a = range(1, 100);
            echo array_sum($a);
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            echo implode('<br>', $a);
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php
            $a = [];
            $a = array_fill(0, 10, 'x');
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php
            $a = range(1, 10);
            shuffle($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 6</h4>
        <?php
            $a = range(1, 5);
            echo array_product($a);
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php
            $a = range(1, 5);
            echo array_sum($a);
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php
            $s = 'hello world';
            $s = strrev($s);
            $s = ucfirst($s);
            $s = strrev($s);
            echo $s;
        ?>
    </p>
    <p>
        <h4>Task 9</h4>
        <?php
            $a = [1, 2, 3, 4];
            $a = array_map('sqrt', $a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php
            $a = range('a', 'z');
            $b = range(1, 26);
            $ar = array_combine($a, $b);
            echo '<pre>';
            print_r($ar);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php
            $s = '1234567890';
            $a = str_split($s, 2);
            echo array_sum($a);
        ?>
    </p>
</body>
</html>