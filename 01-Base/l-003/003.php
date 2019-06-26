<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3. Arrays</title>
</head>
<body>

    <p>
        <h4>Task 1</h4>
        <?php
            $arr=['a', 'b', 'c'];
            echo '<pre>';
            var_dump($arr);
            echo '</pre>';
        ?>
    </p>

    <p>
        <h4>Task 2</h4>
        <?php
            echo $arr[0];
            echo $arr[1];
            echo $arr[2];
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            $arr = ['a', 'b', 'c', 'd'];
            echo 'a'.' + '.'b';
            echo '<br>';
            echo 'c'.' + '.'d';
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php
            $arr = [2, 5, 3, 9];
            $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
            echo $result;
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php
            $arr = [];
            for ($i=1; $i < 6; $i++) { 
                $arr[] = $i;
            }
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 6</h4>
        <?php
            $arr = [
                'a' => 1,
                'b' => 2,
                'c' => 3
            ];
            echo $arr['c'];
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php
            $sum = 0;
            foreach ($arr as $key => $value) {
                $sum += $value;
            }
            echo $sum;
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php
            $arr = [
                'Nicol' => '1000$',
                'Basil' => '200$',
                'Peter' => '500$'
            ];
            echo $arr['Nicol'].'<br>';
            echo $arr['Peter'];
        ?>
    </p>
    <p>
        <h4>Task 9</h4>
        <?php
            $week = [
                1 => 'пн',
                'вт',
                'ср',
                'чт',
                'пт',
                'сб',
                'вс'
            ];
            echo $week[5];
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php
            $arr = [
                'c' => ['joomla', 
                        'wordpress', 
                        'drupal'],
                'colors' => ['blue' =>'голубой', 
                             'red' => 'красный', 
                             'yellow' => 'желтый']
            ];
            echo $arr['c'][0] . '<br>';
            echo $arr['c'][2] . '<br>';
            echo $arr['colors']['yellow'] . '<br>';
            echo $arr['colors']['red'];
        ?>
    </p>
    <p>
        <h4>Task 12</h4>
        <?php
            $arr = [
                'ru' => ['понедельник', "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"],
                'en' => ['monday', 'tusday', 'wednesday', 'chetverg', 'friday', 'saterday', 'sunday']
            ];
            echo $arr['ru'][0] . '<br>';
            echo $arr['en'][2];
        ?>
    </p>
    <p>
        <h4>Task 13</h4>
    </p>
</body>
</html>