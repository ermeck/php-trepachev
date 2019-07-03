<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>013. Flags</title>
</head>
<body>
    <p>
        <h4>Task 1</h4>
        <?php
            $arr = [1, 3, 2, 4, 7, 6];
            $boo = false;
            foreach ($arr as $value) {
                if ($value == 5) {
                    $boo = true;
                    break;
                }
            }
            if ($boo) {
                echo 'Yes';
            } else {
                echo "No";
            }
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php
            $num = 31;
            $boo = false;
            for ($i = 2; $i <= 30; $i++) {
                if ($num % $i == 0) {
                    $boo = true;
                    break;
                }
            }

            if ($boo) {
                echo "$num - не простое число";
            } else {
                echo "$num - простое число";
            }
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            $arr = [2, 0, 1, 3, 4, 8];
            $boo = false;
            for ($i = 1; $i <= count($arr); $i++) {
                if ($arr[$i] == $arr[$i - 1]) {
                    $boo = true;
                    break;
                }
            }

            if ($boo) {
                echo 'Yes';
            } else {
                echo 'No';
            }
        ?>
    </p>
</body>
</html>