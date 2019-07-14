<?php
    session_start();
    
    $_SESSION['test'] = 'TEST #2';

    
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter'] += 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>032. Сессии</title>
</head>
<body>

    <h4>Task 2</h4>
    <a href="second_page.php">Second Page</a>

    <h4>Task 3</h4>
    <?php 
        echo "Это Ваше ".$_SESSION['counter']."-е посещение страницы";
     ?>

     <h4>Task 4</h4>

     <form action="" method="GET">
        <p>Из какой Вы страны? <input type="text" name="country"></p>
        <input type="submit">
     </form>

     <?php
        if (isset($_GET['country'])) {
            $_SESSION['country'] = $_GET['country'];
        } else {
            echo "Данных нет<br>";
        }
     ?>
    <a href="test.php">Перейдите по ссылке</a>

    <h4>Task 5</h4>
    <?php 
        if (!isset($_SESSION['timer'])) {
            $_SESSION['timer'] = time();
        }
        // echo $_SESSION['timer'];
        $change = time() - $_SESSION['timer'];
        echo "Вы заходили ".$change." секунд назад"
    ?>

    <h4>Task 6</h4>
    <form action="" method="GET">
        <p>Введите Вашу почту<input type="text" name="mail"></p>
        <input type="submit">
    </form>
    <?php
        if (isset($_GET['mail'])) {
            $_SESSION['mail'] = $_GET['mail'];
        }
    ?>
    <form action="">
        <p>Имя: <input type="text"></p>
        <p>Фамилия: <input type="text"></p>
        <p>Пароль: <input type="text"></p>
        <p>Почта: <input type="text" value="<?php echo $_SESSION['mail'] ?>"></p>
    </form>
</body>
</html>