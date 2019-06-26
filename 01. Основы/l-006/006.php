<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>006 Работа с математическими функциями в PHP</title>
</head>
<body>
    <h2>Работа с %</h2>
    <p>
        <h4>Task 1</h4>
        <?php 
            $a = 10;
            $b = 3;
            echo 'Целочисленный остаток от деления '.$a .' % '.$b.' = ' . $a % $b;
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php 
            $a = 9;
            $b = 4;
            $c = $a % $b;
            if ($c == 0) {
                echo 'Делитя без остатка';
            } else {
                echo 'Делится с остатком';
            }
        ?>
    </p>

    <h2>Работа со степенью и корнем</h2>
    <p>
        <h4>Task 3</h4>
        <?php 
            $st = pow(2, 10);
            echo $st;
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php 
            echo sqrt(245);
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php 
            $arr = [4, 2, 5, 19, 13, 0, 10];
            $sum = 0;
            foreach($arr as $value) {
                $sum += pow($value, 2);
            }
            echo sqrt($sum);
        ?>
    </p>

    <h2>Работа с функциями округления</h2>
    <p>
        <h4>Task 6</h4>
        <?php 
            $a = 379;
            $sqrt = sqrt($a);
            echo $sqrt.'<br>';
            echo round($sqrt).'<br>';
            echo round($sqrt, 1).'<br>';
            echo round($sqrt, 2).'<br>';
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php 
            $a = 587;
            $sqrt = sqrt($a);
            $arr = [];
            $arr[] = $sqrt;
            $arr['floor'] = floor($sqrt);
            $arr['ceil'] = ceil($sqrt);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с min и max</h2>
    <p>
        <h4>Task 8</h4>
        <?php 
            $arr = [4, -2, 5, 19, -130, 0, 10];
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
            echo 'Min: '.min($arr).'<br>';
            echo 'Max: '.max($arr).'<br>';
        ?>
    </p>

    <h2>Работа с рандомом</h2>
    <p>
        <h4>Task 9</h4>
        <?php 
            echo mt_rand(1, 100);
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php 
            $count = 10;
            $arr = [];
            for ($i = 0; $i < $count; $i++) {
                $arr[] = mt_rand(1, 100);
            }
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с модулем</h2>
    <p>
        <h4>Task 11</h4>
        <?php 
            $a = mt_rand(-10, 10);
            $b = mt_rand(-10, 10);
            echo 'a = ' .$a. '; b = ' . $b . '<br>';
            echo '|a - b| = '.abs($a - $b);
        ?>
    </p>
    <p>
        <h4>Task 12</h4>
        <?php 
            $arr = [1, 2, -1, -2, 3, -3];
            $arr2 = [];
            foreach ($arr as $value) {
                $arr2[] = abs($value);
            }
            echo '<pre>';
            print_r($arr2);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 13</h4>
        <?php 
            $num = 30;
            $arr = [];
            for ($i = 1; $i <= ceil($num / 2); $i++) {
                if ( $num % $i == 0) {
                    $arr[] = $i;
                }
            }
            $arr[] = $num;
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 14</h4>
        <?php 
            $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            $num = 10;
            $i = 0;
            $sum = 0;
            foreach ($arr as $value) {
                $i++;
                $sum += $value;
                if ($sum > 10)
                    break;
            }
            echo $i;
        ?>
    </p>
</body>
</html>