<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>014. Работа с логическими значениями</title>
</head>
<body>
    <p>
        <h2>Task 1</h2>
        <?php
            function f($a, $b) {
                return $a > $b;
            }

            echo f(5, 4);
        ?>
    </p>
    <p>
        <h2>Task 2</h2>
        <?php
            function f2($a, $b) {
                return ($a + $b) > 10;
            }

            var_dump(f2(5, 4));
        ?>
    </p>
    <p>
        <h2>Task 3</h2>
        <?php
            function f3($a) {
                return $a < 0;
            }

            var_dump(f3(2));
        ?>
    </p>
</body>
</html>