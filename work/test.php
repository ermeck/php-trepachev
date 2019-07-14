<?php
    session_start();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } else {
        $_SESSION['counter'] += 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [
            [
                1, 
                'Дважды два', 
                'Три', 
                'Четыре', 
                'Пять',
                'Четыре'
            ],
            [
                2,
                'Пушкин это',
                'Писатель',
                'Полководец',
                'Космонавт',
                'Писатель'
            ],
            [
                3,
                'Формула воды',
                'Эн о три',
                'Це два аш пять о аш ',
                'Аш два о',
                'Аш два о'
            ],
        ];

        echo '<b>'.$arr[$_SESSION['counter']][1].'</b><br><br>';
        var_dump($_SESSION['counter']);
        ?>
        <form action="" method="GET" name="test">
            <?php
                for ($i=2; $i <=4 ; $i++) { 
                    ?>
                    <p><input type="radio" name="question" value="<?php echo $arr[$_SESSION['counter']][$i] ?>"><?php echo $arr[$_SESSION['counter']][$i] ?></p>
                    <?php
                }
                if ($_SESSION['counter'] == count($arr)) {
                    echo 'bingo';
                }
            ?>
            <input type="submit">
        </form>
    <br>
    <br>
    <a href="test_result.php">Result</a>
</body>
</html>
