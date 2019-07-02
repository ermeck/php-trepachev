<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>011. Работа с датами</title>
</head>
<body>

    <h2>Timestamp: time и mktime</h2>

    <p>
        <h4>Task 1</h4>
        <?php 
            echo time();
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php 
            echo mktime(0, 0, 0, 3, 1, 2215);
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php 
            echo mktime(0, 0, 0, 12, 31);
            echo (time() - mktime(0, 0, 0, 12, 31))/60/60/24/30;
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php 
            echo time() - mktime(59, 12, 13, 3, 15, 2000);
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php 
            echo floor((time() - mktime(7, 23, 48, 7, 2, 2019))/60/60);
        ?>
    </p>

    <h2>Функция date()</h2>
    <p>
        <h4>Task 6</h4>
        <?php 
            echo date('Y.m.d H:i:s');
        ?>
    </p>
    <p>
        <h4>Task 7</h4>
        <?php 
            echo date('Y-m-d').'<br>';
            echo date('d.m.Y').'<br>';
            echo date('d.n.y').'<br>';
            echo date('H:i:s');
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php 
            echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
        ?>
    </p>
    <p>
        <h4>Task 9</h4>
        <?php 
            $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
            $day = date('w');
            echo $week[$day].'<br>';

            $day = date('w', mktime(0, 0, 0, 6, 6, 2006));
            echo $week[$day].'<br>';

            $day = date('w', mktime(0, 0, 0, 11, 3));
            echo $week[$day].'<br>';
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php 
            $months = ['январь', 
                      'февраль', 
                      'март', 
                      'апрель', 
                      'май', 
                      'июнь', 
                      'июль', 
                      'август', 
                      'сентябрь', 
                      'октябрь', 
                      'ноябрь', 
                      'декабрь'];
            $m = (int)date('m')-1;
            echo $months[$m];
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php 
            $m = date('m');
            switch ($m) {
                case '01':
                    echo '31 день';
                    break;

                case '02':
                    echo '28 дней';
                    break;

                case '03':
                    echo '31 день';
                    break;

                case '04':
                    echo '30 дней';
                    break;
                
                case '05':
                    echo '31 день';
                    break;
                
                case '06':
                    echo '30 дней';
                    break;
                
                case '07':
                    echo '31 день';
                    break;
                
                case '08':
                    echo '31 день';
                    break;
                
                case '09':
                    echo'30 дней';
                    break;
                
                case '10':
                    echo'31 день';
                    break;
                
                case '11':
                    echo'31 дней';
                    break;
                
                case '12':
                    echo'31 день';
                    break;
                
                default:
                    echo'Error';
                    break;
            }
        ?>
    </p>
    <p>
        <h4>Task 12</h4><?php ?>
    </p>
    <p>
        <h4>Task 13</h4>
        <form action="" method="GET">
            <p>Введите дату в формате ДД.ММ.ГГГГ: <input type="text" name="date"></p>
            <p><input type="submit"></p>
        </form>
        <?php 
            if (isset($_GET['date'])) {
                $str = $_GET['date'];
                $arr = explode('.', $str);
                echo mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]).'<br>';

                $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
                $day = date('w', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));
                echo $week[$day];
            }
        ?>
    </p>
    <p>
        <h4>Task 14</h4>
        <form action="" method="GET">
            <p>Введите дату в формате ДД.ММ.ГГГГ: <input type="text" name="date"></p>
            <p><input type="submit"></p>
        </form>
        <?php 
            if (isset($_GET['date'])) {
                $str = $_GET['date'];
                $arr = explode('.', $str);
                echo mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]).'<br>';

                
                $month = date('m', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));
                $months = ['январь', 
                      'февраль', 
                      'март', 
                      'апрель', 
                      'май', 
                      'июнь', 
                      'июль', 
                      'август', 
                      'сентябрь', 
                      'октябрь', 
                      'ноябрь', 
                      'декабрь'
                  ];
                $m = (int)date('m')-1;
                echo $months[$m];
            }
        ?>
    </p>

    <h2>Сравнение дат</h2>
    <p>
        <h4>Task 15</h4>
        <form action="" method="GET">
            <p>Формат вводимых дат "ГГГГ-ММ-ДД"</p>
            <p>Введите первую дату <input type="text" name="first_date"></p>
            <p>Введите вторую дату <input type="text" name="second_date"></p>
            <p><input type="submit"></p>
        </form>
        <?php 
            if (isset($_GET['first_date']) && isset($_GET['second_date'])) {
                $first_date_arr = explode('-', $_GET['first_date']);
                $second_date_arr = explode('-', $_GET['second_date']);
                $first_timestamp = mktime(0, 0, 0, $first_date_arr[1], $first_date_arr[0], $first_date_arr[2]);
                $second_timestamp = mktime(0, 0, 0, $second_date_arr[1], $second_date_arr[0], $second_date_arr[2]);
                if ($first_timestamp > $second_timestamp) {
                    echo "Первая дата больше";
                } elseif ($first_timestamp < $second_timestamp) {
                    echo "Вторая дата больше";
                } else {
                    echo "Даты равны";
                }
            }
        ?>
    </p>

    <h2>На strtotime()</h2>
    <p>
        <h4>Task 16</h4>
        <?php 
            $str = '2025-12-31';
            // echo strtotime($str);
            $date = date('d-m-Y', strtotime($str));
            echo $date;
        ?>
    </p>
    <p>
        <h4>Task 17</h4>
        <?php 
            echo date('H:i:s d.m.Y', strtotime('2025-12-31 T12:13:59'));
        ?>
    </p>

    <h2>Прибавление и отнимание дат</h2>
    <p>
        <h4>Task 18</h4>
        <?php 
            $date = date_create('2025-12-31');
            date_modify($date, '2 days');
            echo date_format($date, 'd.m.Y').'<br>';

            date_modify($date, '1 month 3days');
            echo date_format($date, 'd.m.Y').'<br>';

            date_modify($date, '1 year');
            echo date_format($date, 'd.m.Y').'<br>';

            date_modify($date, '-3 days');
            echo date_format($date, 'd.m.Y').'<br>';
        ?>
    </p>

    <h2>Задачи</h2>
    <p>
        <h4>Task 19</h4>
        <?php 
            $days = (time() - mktime(0, 0, 0, 1, 1, 2020))/60/60/24;
            echo "До нового года осталось ".abs(floor($days))." дней";
        ?>
    </p>
    <p>
        <h4>Task 20</h4>
        <form action="" method="GET">
            <p>Введите год: <input type="text" name="year"></p>
            <p><input type="submit"></p>
        </form>
        <?php 
            if (isset($_GET['year'])) {
                $date = strtotime($_GET['year'].'-1-1');
                while (date('Y', $date) == $_GET['year']) {
                    $date += 60*60*24;
                    if (date('w', $date) === '5' && date('j', $date) == '13') {
                        echo date('d.m.Y', $date).'<br>';
                    }
                }
            }
        ?>
    </p>
    <p>
        <h4>Task 21</h4>
        <?php 
            $date = time() - 60*60*24*100;
            echo date('w', $date);
        ?>
    </p>
</body>
</html>