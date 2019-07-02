<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>10. Forms</title>
</head>
<body>
    <h2>Формы</h2>
    <p>
        <h4>Task 1</h4>
        <form action="" method="GET">
            <p>Ваше имя <input type="text" name="name"></p>
            <input type="submit">
        </form>

        <?php
            if (!empty($_REQUEST['name'])) {
                $name = $_REQUEST['name'];
                echo 'Your name: '.$name;
            }
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <form action="" method="GET">
            <p>Ваше имя: <input type="text" name="name"></p>
            <p>Ваш возраст: <input type="text" name="age"></p>
            <p><textarea name="message" id="" cols="30" rows="10"></textarea></p>
            <input type="submit" name="submit">
        </form>
        <?php
            if (isset($_REQUEST['submit'])) {
                $age = strip_tags($_REQUEST['age']);
                $name = strip_tags($_REQUEST['name']);
                $message = strip_tags($_REQUEST['message']);
                echo "Привет, $name, $age <br> Твое сообщение: $message";
            }
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            if (!isset($_REQUEST['age'])) {
        ?>
        <form action="" method="GET">
            <p>Сколько тебе лет: <input type="text" name="age"></p>
            <p><input type="submit"></p>
        </form>
        <?php
            }
        ?>

        <?php
            $age = $_REQUEST['age'];
            if (isset($_REQUEST['age'])) {
                echo "Your age: $age";
            }
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <form action="" method="GET">
            <input type="text" name="login">
            <input type="password" name="pass">
            <input type="submit" name="submit">
        </form>

        <?php
            if (isset($_REQUEST['submit'])) {
                $login = 'user';
                $pass = '123456';
                $formLogin = trim($_REQUEST['login']);
                $formPass = trim($_REQUEST['pass']);
                if ($login == $formLogin and $pass == $formPass) {
                    echo 'Доступ разрешен!';
                } else {
                    echo 'Доступ запрещен!';
                }
            }
        ?>
    </p>

    <h2>Задачи</h2>
    <p>
        <h4>Task 5</h4>
        <form action="" method="GET">
            <p><input type="text" name="name" placeholder="Your Name" value="<?php if(isset($_REQUEST['name'])){
                            echo $_REQUEST['name'];
                        } 
                    ?>"></p>
            <input type="submit">
        </form>
        
    </p>
    <p>
        <h4>Task 6</h4>
        <form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <textarea name="message">
        <?php if (isset($_GET['message'])) echo $_GET['message']; ?>
    </textarea>
    <input type="submit">
            <?php
                var_dump($_REQUEST['message']);
            ?>
        </form>
    </p>
</body>
</html>