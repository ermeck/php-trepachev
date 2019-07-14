<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>015. Вложенные циклы</title>
</head>
<body>

<?php
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <=3; $j++) {
            echo $i;
        }
    }

?>
<br>
<?php

    for ($i = 0; $i < 10; $i++) 
        $str .= 'x';
    echo $str;
?>
<br>
<?php
    $str = '';
    for ($i = 0; $i < 5; $i++) {
        $str .= 'x';
        echo $str.'<br>';
    }
?>

<br>
<?php
    $str = '';
    for ($i = 1; $i < 10; $i++) {
        $str .= $i;
    }
    echo $str;
?>

<br>
<?php
    $str = '';
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j <=3; $j++) {
            echo $i;
        }
        echo '<br>';
    }
?>

<br>
<?php
    for ($i =1; $i < 10; $i++) {
        $str = '';
        for ($j = 1; $j <= $i ; $j++) {
            $str .= $i;
        }
        echo $str.'<br>';
    }
?>

<br>
<?php
    $num = 500;
    while ($num > 10) {
        $num /= 2;
        echo $num.'<br>';
    }
?>



    <p>
        <h2>Task 1</h2>
        <?php 
            $s = '';
            for ($i=1; $i <= 9; $i++) { 
                $s .= $i;
            }
            echo $s;
        ?>
    </p>
    <p>
        <h2>Task 2</h2>
        <?php 
            $s = '';
            for ($i = 9; $i > 0; $i--) {
                $s .= $i;
            }
            echo $s;
        ?>
    </p>
    <p>
        <h2>Task 3</h2>
        <?php 
            $s = '-';
            for ($i = 1; $i <= 9; $i++) {
                $s .= $i.'-';
            }
            echo $s;
        ?>
    </p>
    <p>
        <h2>Task 4</h2>
        <?php 
            $s = '';
            for ($i = 0; $i < 5; $i++) {
                $s .= 'x';
                echo $s.'<br>';
            }
        ?>
    </p>
    <p>
        <h2>Task 5</h2>
        <?php 
            for ($i = 1; $i <= 9; $i++) {
                $s = '';
                for ($j = 1; $j <= $i; $j++) {
                    $s .= $i;
                }
                echo $s.'<br>';
            }
        ?>
    </p>
    <p>
        <h2>Task 6</h2>
        <?php 
            $s = '';
            for ($i = 1; $i < 4; $i++) {
                $s .= 'xx';
                echo $s.'<br>';
            }
        ?>
    </p>
</body>
</html>