<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08. Задачи и функции для работы с массивами в PHP</title>
</head>
<body>
    <h2>Работа с count</h2>
    <p>
        <h4>Task 1</h4>
        <?php
            $arr = range(1, 10);
            echo count($arr);
        ?>
    </p>
    <p>
        <h4>Task 2</h4>
        <?php
            echo $arr[count($arr)-1];
        ?>
    </p>

    <h2>Работа с in_array</h2>
    <p>
        <h4>Task 3</h4>
        <?php
            if (in_array(3, $arr)) {
                echo "Yes";
            } else {
                echo "No";
            }
        ?>
    </p>

    <h2>Работа с array_sum() и array_product()</h2>
    <p>
        <h4>Task 4</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            echo array_sum($arr);
        ?>
    </p>
    <p>
        <h4>Task 5</h4>
        <?php
            echo array_product($arr);
        ?>
    </p>
    <p>
        <h4>Task 6</h4>
        <?php
            echo array_sum($arr)/count($arr);
        ?>
    </p>

    <h2>Работа с range</h2>
    <p>
        <h4>Task 7</h4>
        <?php
            $arr = range(1, 100);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 8</h4>
        <?php
            $arr = range('a', 'z');
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 9</h4>
        <?php
            $arr = range(1, 9);
            $str = implode('-', $arr);
            echo $str;
        ?>
    </p>
    <p>
        <h4>Task 10</h4>
        <?php
            echo array_sum(range(1, 5));
        ?>
    </p>
    <p>
        <h4>Task 11</h4>
        <?php
            echo array_product(range(1, 5));
        ?>
    </p>

    <h2>Работа с array_merge</h2>
    <p>
        <h4>Task 12</h4>
        <?php
            $arr1 = range(1, 3);
            $arr2 = range('a', 'c');
            $res = array_merge($arr1, $arr2);
            echo '<pre>';
            print_r($res);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_slice</h2>
    <p>
        <h4>Task 13</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            $result = array_slice($arr, 1, 3);
            echo '<pre>';
            print_r($result);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_splice</h2>
    <p>
        <h4>Task 14</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 1, 2);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 15</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            $arr2 = array_splice($arr, 1, 3);
            echo '<pre>';
            print_r($arr2);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 16</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 3, 0, ['a', 'b', 'c']);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 17</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 1, 0, ['a', 'b']);
            array_splice($arr, 6, 0, ['c']);
            array_splice($arr, 8, 0, ['e']);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_keys, array_values, array_combine</h2>
    <p>
        <h4>Task 18</h4>
        <?php
            $arr = ['a' => 1, 'b' => 2, 'c' => 3];
            $keys = array_keys($arr);
            echo '<pre>';
            print_r($keys);
            echo '</pre>';
            $values = array_values($arr);
            echo '<pre>';
            print_r($values);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 19</h4>
        <?php
            $a = [];
            for ($i = 0; $i < count($keys); $i++) {
                $a[$keys[$i]] = $values[$i];
            }
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_flip(), array_reverse()</h2>
    <p>
        <h4>Task 20</h4>
        <?php
            $a = ['a' => 1, 'b' => 2, 'c' => 3];
            $a = array_flip($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 21</h4>
        <?php
            $a = [1, 2, 3, 5, 6];
            $a = array_reverse($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_search()</h2>
    <p>
        <h4>Task 22</h4>
        <?php
            $a = ['a', '-', 'b', '-', 'c', '-', 'd'];
            echo array_search('-', $a);
        ?>
    </p>
    <p>
        <h4>Task 23</h4>
        <?php
            $a = ['a', '-', 'b', '-', 'c', '-', 'd'];
            $num = array_search('-', $a);
            array_splice($a, $num, 1);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_replace()</h2>
    <p>
        <h4>Task 24</h4>
        <?php
            $a = ['a', 'b', 'c', 'd', 'e'];
            $b = array_replace($a, [0 => '!', 3 => '!!']);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с сортировкой</h2>
    <p>
        <h4>Task 25</h4>
        <?php
            $a = [2, 5, 1, 8];
            sort($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_rand()</h2>
    <p>
        <h4>Task 26</h4>
        <?php
            $a = ['a' => 1, 'b' => 2, 'c' => 3];
            echo array_rand($a);
        ?>
    </p>
    <p>
        <h4>Task 27</h4>
        <?php
            $a = ['a' => 1, 'b' => 2, 'c' => 3];
            echo array_rand($a);
            echo $a[array_rand($a)];
        ?>
    </p>

    <h2>Работа с shuffle</h2>
    <p>
        <h4>Task 28</h4>
        <?php
            $arr = [1, 2, 3, 4, 5];
            shuffle($arr);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 29</h4>
        <?php
            $a = range(1, 5);
            shuffle($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 30</h4>
        <?php
            $a = range('a', 'f');
            shuffle($a);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 31</h4>
        <?php
            $a = range('a', 'z');
            shuffle($a);
            $a = array_splice($a, 0, 6);
            $s = implode('', $a);
            echo $s;
        ?>
    </p>

    <h2>Работа c shuffle</h2>
    <p>
        <h4>Task 32</h4>
        <?php
            $arr = ['a', 'b', 'c', 'a', 'b'];
            $arr = array_unique($arr);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_shift, array_pop, array_unshift, array_push</h2>
    <p>
        <h4>Task 33</h4>
        <?php
            $a = [1, 2, 3, 4, 5];
            echo array_shift($a).'<br>';
            echo array_pop($a).'<br>';
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 34</h4>
        <?php
            $a = [1, 2, 3, 4, 5];
            array_unshift($a, 0);
            array_push($a, 6);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 35</h4>
        <?php
            $a = [1, 2, 3, 4, 5, 6, 7, 8];

            $s = '';
            while (count($a) > 0) {
                $s .= array_shift($a);
                $s .= array_pop($a);
            }

            echo $s;
        ?>
    </p>

    <h2>Работа с array_pad, array_fill, array_fill_keys, array_chunk</h2>
    <p>
        <h4>Task 36</h4>
        <?php
            $a = ['a', 'b', 'c'];
            $a = array_pad($a, 5, '-');
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 37</h4>
        <?php
            $a = [];
            $a = array_fill(0, 10, 'x');
            echo '<pre>';
            print_r($a);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 38</h4>
        <?php
            $a = range(1, 20);
            $b = array_chunk($a, 4);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_count_values()</h2>
    <p>
        <h4>Task 39</h4>
        <?php
            $a = ['a', 'b', 'c', 'b', 'a'];
            $b = array_count_values($a);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_map()</h2>
    <p>
        <h4>Task 40</h4>
        <?php
            $a = [1, 2, 3, 4, 5];
            $b = array_map('sqrt', $a);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 41</h4>
        <?php
            $a = ['<b>php</b>', '<i>html</i>'];
            echo '<pre>';
            print_r($a);
            echo '</pre>';
            $b = array_map('strip_tags', $a);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 42</h4>
        <?php
            $a = [' a ', ' b ', ' c '];
            echo '<pre>';
            print_r($a);
            echo '</pre>';
            $b = array_map('trim', $a);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>

    <h2>Работа с array_intersect(), array_diff()</h2>
    <p>
        <h4>Task 43</h4>
        <?php
            $a = [1, 2, 3, 4, 5];
            $b = [3, 4, 5, 6, 7];
            print_r(array_intersect($a, $b));
        ?>
    </p>
    <p>
        <h4>Task 44</h4>
        <?php
            $a = [1, 2, 3, 4, 5];
            $b = [3, 4, 5, 6, 7];
            print_r(array_diff($b, $a));
        ?>
    </p>

    <h2>Задачи</h2>
    <p>
        <h4>Task 45</h4>
        <?php
            $s = '1234567890';
            $a = str_split($s);
            echo '<pre>';
            print_r($a);
            echo '</pre>';
            echo array_sum($a);
        ?>
    </p>
    <p>
        <h4>Task 46</h4>
        <?php
            $a = range(1, 26);
            $b = range('a', 'z');
            $arr = array_combine($b, $a);
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 47</h4>
        <?php
            $a = range(1, 9);
            $b = array_chunk($a, 3);
            echo '<pre>';
            print_r($b);
            echo '</pre>';
        ?>
    </p>
    <p>
        <h4>Task 48</h4>
        <?php
            $a = [1, 2, 4, 5, 5];
            echo $a[2];
        ?>
    </p>
</body>
</html>