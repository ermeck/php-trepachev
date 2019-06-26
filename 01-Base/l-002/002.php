<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>001 trepachev</title>
</head>
<body>

    <p>
        <h4>Task 1</h4>
        <?php
            $a = 3;
            echo $a;
        ?>
    </p>

    <p>
        <h4>Task 2</h4>
        <?php
        $a = 10;
        $b = 2;
        echo $a + $b . '<br>';
        echo $a - $b . '<br>';
        echo $a * $b .'<br>';
        echo $a / $b . '<br>';
    ?></p>

    <p>
        <h4>Task 3</h4>
        <?php
            $c = 15;
            $d = 2;
            $result = $c + $d;
            echo $result;
        ?>
    </p>

    <p>
        <h4>Task 4</h4>
        <?php
            $a = 10;
            $b = 2;
            $c = 5;
            echo $a + $b + $c;
        ?>
    </p>

    <p>
        <h4>Task 5</h4>
        <?php
            $a = 17;
            $b = 10;
            $c = $a - $b;
            $d = 7;
            $result = $c + $d;
            echo $result;
        ?>
    </p>

    <p>
        <h4>Task 6</h4>
        <?php 
            $text = "Привет, Мир!";
            echo $text
        ?>
    </p>

    <p>
        <h4>Task 7</h4>
        <?php
            $text1 = "Привет, ";
            $text2 = "Мир";
            echo $text1 . $text2;
        ?>
    </p>

    <p>
        <h4>Task 8</h4>
        <?php
            $name = "ermeck";
            echo "Hello ". $name;
        ?>
    </p>

    <p>
        <h4>Task 9</h4>
        <?php
            $age = 45;
            echo "I'm " . $age;
        ?>
    </p>

    <p>
        <h4>Task 10</h4>
        <?php 
            $text = 'abcde';
            echo $text[0].$text[2].$text[4];
        ?>
    </p>

    <p>
        <h4>Task 11</h4>
        <?php
            $text = 'abcde';
            $text[0] = '!';
            echo $text;
        ?>
    </p>

    <p>
        <h4>Task 12</h4>
        <?php
            $num = '12345';
            echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
        ?>
    </p>

    <p>
        <h4>Task 13</h4>
        <?php
            echo 60 * 60 . ' seconds in a hour<br>';
            echo 60 * 60 * 24 . ' seconds in a twenty four hours<br>';
            echo 60 * 60 * 24 * 30 . ' seconds in a month';
        ?>
    </p>

    <p>
        <h4>Task 14</h4>
        <?php
            $hour = 20;
            $min = 25;
            $sec = 22;
            echo $hour .":".$min.":".$sec;
        ?>
    </p>

    <p>
        <h4>Task 15</h4>
        <?php 
        $num = 23;
        echo $num * $num;
        ?>
    </p>

    <p>
        <h4>Task 16</h4>
        <?php
            $var = 47;
            $var += 7;
            $var -= 18;
            $var *= 10;
            $var /= 20;
            echo $var;
        ?>
    </p>

    <p>
        <h4>Task 17</h4>
        <?php
            $text = 'Я';
            $text .= ' хочу';
            $text .= ' знать';
            $text .= ' PHP!';
            echo $text;
        ?>
    </p>

    <p>
        <h4>Task 18</h4>
        <?php
            $var = 10;
            ++$var;
            ++$var;
            --$var;
            echo $var;
        ?>
    </p>

    <p>
        <h4>Task 19</h4>
        <?php
            $var = 10;
            $var += 7;
            ++$var;
            --$var;
            $var += 12;
            $var *= 7;
            $var -= 15;
            echo $var;
        ?>
    </p>