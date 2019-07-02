<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>012. Простые функции</title>
</head>
<body>
    <h2>Простые функции</h2>
    <p>
        <h4>Task 1</h4>
        <?php
            function square($x) {
                return $x * $x;
            }

            echo square(5);
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php
            function sum($x, $y) {
                return $x + $y;
            }

            echo sum(5, 7);
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            function arifm($a, $b, $c) {
                return ($a - $b) / $c;
            }

            echo arifm(100, 30, 7);
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php
            $day = rand(0, 6);
            $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
            echo $week[$day];
        ?>
    </p>
</body>
</html>