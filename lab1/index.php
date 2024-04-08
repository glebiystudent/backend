<?php
    echo nl2br("Полину в мріях в купель океану\n");
    echo nl2br("Відчую <b> шовковистість </b> глибинu\n");
    echo nl2br("Чарівні мушлі з дна собі дістану\n");
    echo nl2br("Щоб <b> взимку </b>\n");
    echo nl2br("<u> тішилu </u>\n");
    echo nl2br("мене\n");
    echo nl2br("вони");
    echo nl2br("\n\n\n");
?>


<?php
    $uah = 1500;
    $usd = round($uah / 39.01);
    echo "$uah UAH can be exchanged to $usd$";
    echo nl2br("\n\n\n");
?>


<?php
    $n = 5;

    if($n == 1) {
        echo "january";
    } else if($n == 2) {
        echo "february";
    } else if($n == 3) {
        echo "march";
    } else if($n == 4) {
        echo "april";
    } else if($n == 5) {
        echo "may";
    } else if($n == 6) {
        echo "june";
    } else if($n == 7) {
        echo "july";
    } else if($n == 8) {
        echo "august";
    } else if($n == 9) {
        echo "september";
    } else if($n == 10) {
        echo "october";
    } else if($n == 11) {
        echo "november";
    } else if($n == 12) {
        echo "december";
    } else {
        echo "dumbassember";
    }

    echo nl2br("\n\n\n");
?>


<?php
    $c = 'a';
    $condition = false;

    switch($c) {
        case 'a':
            $condition = true;
        break;
        case 'e':
            $condition = true;
        break;
        case 'i':
            $condition = true;
        break;
        case 'o':
            $condition = true;
        break;
        case 'u':
            $condition = true;
        break;
        case 'y':
            $condition = true;
        break;
    }

    if($condition) {
        echo "It is!";
    } else {
        echo "It's not..";
    }

    echo nl2br("\n\n\n");
?>


<?php
    $num = mt_rand(100, 999);
    $digits = array((int)substr($num, 0, 1), (int)substr($num, 1, 1), (int)substr($num, 2, 1));
    $sum = array_sum($digits);

    echo nl2br("Sum: $sum\n");
    echo nl2br("Reverse: $digits[2]$digits[1]$digits[0]\n");
    sort($digits);
    echo "Maximum: $digits[2]$digits[1]$digits[0]";


    echo nl2br("\n\n\n");
?>


<?php
    $rows = 10;
    $columns = 5;

    for($i = 0; $i < $columns; ++$i) {
        for($j = 0; $j < $rows; ++$j) {
            echo "x ";
        }
        echo nl2br("\n");
    }


?>