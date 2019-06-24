<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>007</title>
</head>
<body>
    <h2>Работа с регистром символов</h2>
    <p>
        <h4>Task 1</h4>
        <?php
            $str = 'php';
            echo strtoupper($str);
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php
            echo strtolower('PHP');
        ?>
    </p>
    <p>
        <h4>Task 3</h4>
        <?php
            echo ucfirst('london');
        ?>
    </p>
    <p>
        <h4>Task 4</h4>
        <?php
            echo lcfirst('London');
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php
            echo ucwords('london is the capital of great britain');
        ?>
    </p>
    <p>
        <h4>Task 6</h4>
        <?php
            $str = 'LONDON';
            echo ucfirst(strtolower($str));
        ?>
    </p>

    <h2>Работа с strlen</h2>
    <p>
        <h4>Task 7</h4>
        <?php
            echo strlen('html css php');
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php
            $password = '123456';
            if (strlen($password) > 5 && strlen($password) < 10) {
                echo 'pass is ok!';
            } else {
                echo 'u need other pass';
            }
        ?>
    </p>

    <h2>Работа с substr</h2>
    <p>
        <h4>Task 9</h4>
        <?php
            $str = 'html css php';
            echo substr($str, 0, 4).'<br>';
            echo substr($str, 5, 3).'<br>';
            echo substr($str, 9, 3).'<br>';

        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php
            $str = 'html-css-php';
            echo substr($str, -3, 3);
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php
            $str = 'http://ermeck.com';
            if (substr($str, 0, 7) === 'http://') {
                echo 'yep';
            } else {
                echo 'no';
            }
        ?>
    </p>
    <p>
        <h4>Task 12</h4>
        <?php
            $str = 'httpe://ermeck.com';
            if (substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://') {
                echo 'yep';
            } else {
                echo 'no';
            }
        ?>
    </p>
    <p>
        <h4>Task 13</h4>
        <?php
            $str = '01.png';
            if (substr($str, -4, 4) === '.png') {
                echo 'yes';
            } else {
                echo 'no';
            }
        ?>
    </p>
    <p>
        <h4>Task 14</h4>
        <?php
            $str = '01.jpg';
            if (substr($str, -4, 4) === '.png' || substr($str, -4, 4) === '.jpg') {
                echo 'yes';
            } else {
                echo 'no';
            }
        ?>
    </p>
    <p>
        <h4>Task 15</h4>
        <?php
            $str = 'Hello world!';
            if (strlen($str) > 5) {
                $str = '...'.substr($str, 5);
            }
            echo $str;
        ?>
    </p>

    <h2>Работа с str_replace</h2>
    <p>
        <h4>Task 16</h4>
        <?php
            $str = '31.12.2013';
            $str = str_replace('.', '-', $str);
            echo $str;
        ?>
    </p>
    <p>
        <h4>Task 17</h4>
        <?php
            $str = 'abcdeabcdeabcde';
            $str = str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);
            echo $str;
        ?>
    </p>
    <p>
        <h4>Task 18</h4>
        <?php
            $str = '1a2b3c4b5d6e7f8g9h0';
            $str = str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], '', $str);
            echo $str;
        ?>
    </p>

    <h2>Работа с strtr</h2>
    <p>
        <h4>Task 19</h4>
        <?php
            $str = 'abcabcabc';
            $str = strtr($str, ['a' => '1', 'b' => '2']);
            echo $str;
            echo '<br>';
            $str = 'abcabcabc';
            $str = strtr($str, 'ab', '12');
            echo $str;
        ?>
    </p>

    <h2>Работа с substr_replace</h2>
    <p>
        <h4>Task 20</h4>
        <?php  
            $str = 'abcdefqwer';
            echo substr_replace($str, '!!!', 2, 5)
        ?>
    </p>

    <h2>Работа c strpos, strrpos</h2>
    <p>
        <h4>Task 21</h4>
        <?php
            $str = 'abc abc abc';
            echo strpos($str, 'b');
        ?>
    </p>
    <p>
        <h4>Task 22</h4>
        <?php
            $str = 'abc abc abc';
            echo strrpos($str, 'b');
        ?>
    </p>
    <p>
        <h4>Task 23</h4>
        <?php
            $str = 'abc abc abc';
            echo strpos($str, 'b', 3);
        ?>
    </p>
    <p>
        <h4>Task 24</h4>
        <?php
            $str = 'aaa aaa aaa aaa aaa';
            $first_gap = stripos( $str, ' ' );
            echo $first_gap.'<br>';
            $second_gap = stripos( $str, ' ', $first_gap + 1 );
            echo $second_gap;
        ?>
    </p>
    <p>
        <h4>Task 25</h4>
        <?php 
            $str = '..aaaaaaa';
            $two_dots = false;
            for ($i = 0; $i < strlen($str)-1; $i++) {
                if ( $str[$i] == '.' && $str[$i + 1] == '.' ) {
                    $two_dots = true;
                }
            }
            if ($two_dots) {
                echo 'yes';
            } else {
                echo 'no';
            }
        ?>

    </p>
    <p>
        <h4>Task 26</h4>
        <?php
            $str = 'http://ermeck.com';
            if (strpos($str, 'http://') === 0) {
                echo 'Yes';
            } else {
                echo 'No';
            }
        ?>
    </p>

    <h2>Работа с explode, implode</h2>
    <p>
        <h4>Task 27</h4>
        <?php
            $str = 'html css php';
            $arr = explode(' ', $str);
            echo '<pre>';
            var_dump($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 28</h4>
    </p>
    <p>
        <h4>Task 29</h4>
    </p>
    <p>
        <h4>Task 30</h4>
    </p>
    <p>
        <h4>Task 31</h4>
    </p>
    <p>
        <h4>Task 32</h4>
    </p>
    <p>
        <h4>Task 33</h4>
    </p>
    <p>
        <h4>Task 34</h4>
    </p>
    <p>
        <h4>Task 35</h4>
    </p>
    <p>
        <h4>Task 36</h4>
    </p>
    <p>
        <h4>Task 37</h4>
    </p>
    <p>
        <h4>Task 38</h4>
    </p>
    <p>
        <h4>Task 39</h4>
    </p>
    <p>
        <h4>Task 40</h4>
    </p>
    <p>
        <h4>Task 41</h4>
    </p>
    <p>
        <h4>Task 42</h4>
    </p>
    <p>
        <h4>Task 43</h4>
    </p>
    <p>
        <h4>Task 44</h4>
    </p>
    <p>
        <h4>Task 45</h4>
    </p>
    <p>
        <h4>Task 46</h4>
    </p>
    <p>
        <h4>Task 47</h4>
    </p>
    <p>
        <h4>Task 48</h4>
    </p>
    <p>
        <h4>Task 49</h4>
    </p>
    <p>
        <h4>Task 50</h4>
    </p>
    <p>
        <h4>Task 51</h4>
    </p>
    <p>
        <h4>Task 52</h4>
    </p>
    <p>
        <h4>Task 53</h4>
    </p>
    <p>
        <h4>Task 54</h4>
    </p>
    <p>
        <h4>Task 55</h4>
    </p>
    <p>
        <h4>Task 56</h4>
    </p>

</body>
</html> 