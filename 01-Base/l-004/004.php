<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>004. if-else, switch-case</title>
</head>
<body>
    <h2>if-else, switch-case</h2>

    <p>
        <h4>Task 1</h4>
        <?php 
            $a = -3;
            if ($a == 0) {
                echo "True";
            } else {
                echo "False";
            }
        ?>
    </p>

    <p>
        <h4>Task 2</h4>
        <?php 
            $a = 1;
            if ($a > 0) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php 
            $a = 1;
            if ($a < 0) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php 
            $a = 1;
            if ($a >= 0) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php 
            $a = '1';
            if ($a <= 0) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 6</h4>
        <?php 
            $a = '1';
            if ($a != 0) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php 
            $a = '1';
            if ($a == 'test') {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php 
            $a = '1';
            if ($a === 1) {
                echo "Верно";
            } else {
                echo "Неверно";
            }
        ?>
    </p>

<hr>
    
    <p>
        <h4>Task 9</h4>
        <?php 
            $a = false;
            if (empty($a)) {
                echo $a.' empty';
            } else {
                echo $a.' not empty';
            }
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php 
            $a = false;
            if (!empty($a)) {
                echo $a.' not empty';
            } else {
                echo $a.' empty';
            }
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php 
            $a = null;
            if (isset($a)) {
                echo $a.' isset';
            } else {
                echo $a.' not isset';
            }
        ?>
    </p>
    <p>
        <h4>Task 12</h4>
        <?php 
            $a = null;
            if (!isset($a)) {
                echo $a.' not isset';
            } else {
                echo $a.' isset';
            }
        ?>
    </p>
    <p>
        <h4>Task 13</h4>
        <?php 
            $a = false;
            if ($a) {
                echo "True";
            } else {
                echo "False";
            }
        ?>
    </p>
    <p>
        <h4>Task 14</h4>
        <?php
            $a = true;
            if (!$a) {
                echo "False";
            } else {
                echo "True";
            }
        ?>
    </p>
    <p>
        <h4>Task 15</h4>
        <?php
            $a = 2;
            if ($a > 0 && $a < 5) {
                echo 'True';
            } else {
                echo 'False';
            }
        ?>
    </p>
    <p>
        <h4>Task 16</h4>
        <?php
            $a = 2;
            if ($a == 0 or $a == 2) {
                $a += 7;
            } else {
                $a /= 10;
            }
            echo $a;
        ?>
    </p>
    <p>
        <h4>Task 17</h4>
        <?php
            $a = 0;
            $b = 5;
            if ($a <= 1 && $b >=3) {
                echo $a + $b;
            } else {
                echo $a - $b;
            }
        ?>
    </p>
    <p>
        <h4>Task 18</h4>
        <?php 
            $a = 7;
            $b = 10;
            if (($a > 2 && $a < 11) or ($b >= 6 && $b < 14)) {
                echo 'True';
            } else {
                echo 'False';
            }
        ?>
    </p>
    <p>
        <h4>Task 19</h4>
        <?php 
            $num = rand(1, 4);
            echo '$num = ' . $num . '<br>';
            switch ($num) {
                case 1:
                    echo 'зима';
                break;
                case 2:
                    echo 'весна';
                break;
                case 3:
                    echo 'лето';
                 break;
                case 4:
                    echo 'осень';
                break;
            }
        ?>
    </p>
    <p>
        <h4>Task 20</h4>
        <?php 
            $day = rand(1, 31);
            echo $day . '<br>';
            if ($day <= 10) {
                echo '1-st decade';
            } elseif ($day > 10 && $day <= 20) {
                echo '2-d decade';
            } elseif ($day > 20) {
                echo '3-d decade';
            } else {
                echo 'wrong data';
            }
        ?>
    </p>
    <p>
        <h4>Task 21</h4>
        <?php
            $month = rand(1, 12);
            echo $month . '<br>';
            switch ($month) {
                case 12:
                case 1:
                case 2:
                    echo 'Winter';
                    break;

                case 3:
                case 4:
                case 5:
                    echo 'Spring';
                    break;

                case 6:
                case 7:
                case 8:
                    echo 'Summer';
                    break;
                
                case 9:
                case 10:
                case 11:
                    echo 'Outumn';
                    break;
                
                default:
                    'wrong data';
                    break;
            }
        ?>
    </p>
    <p>
        <h4>Task 22</h4>
        <?php 
            $year = 1600;
            if ((($year % 4 == 0) && ($year % 100 != 0)) or ($year % 400 == 0)) {
                echo $year . ' - leap year';
            } else {
                echo $year . ' - not leap year';
            }
        ?>
    </p>
    <p>
        <h4>Task 23</h4>
        <?php 
            $str = 'abcde';
            if ($str[0] == 'a') {
                echo 'True';
            } else {
                echo 'False';
            }
        ?>
    </p>
    <p>
        <h4>Task 24</h4>
        <?php 
            $str = '12345';
            if (($str[0] == 1) or ($str[0] == 2) or ($str[0] == 3)) {
                echo 'True';
            } else {
                echo 'False';
            }
        ?>
    </p>
    <p>
        <h4>Task 25</h4>
        <?php 
            $str = '134';
            echo $str[0] + $str[1] + $str[2];
        ?>
    </p>
    <p>
        <h4>Task 26</h4>
        <?php 
            $str = 123231;
            if ($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]) {
                echo 'True';
            } else {
                echo 'False';
            }
        ?>
    </p>
</body>
</html>