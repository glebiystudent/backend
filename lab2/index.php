<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    #main-container {
        display: flex;
        flex-direction: row;
    }

    #labels {
        width: 100px;
        margin: 5px;
    }

    #interactions {
        width: 100px;
        margin: 5px;
    }

    #container-games {
        height: 160px;
    }

    #container-about {
        height: 200px;
    }

    #container-photo {
        height: 200px;
    }

    .multiple-row {
        display: flex;
        flex-direction: row;
    }

    .multiple-column {
        display: flex;
        flex-direction: column;
    }

    #about {
        width: 300px;
        height: 200px;
    }

    .checkbox-label {
        font-size: 10px;
    }

    #titles {
        display: flex;
        flex-direction: row;
        height: 45px;
        text-align: center;
        background-color: darkslateblue;
        margin: 10px;
    }

    #titles > * {
        margin: 10px;
    }

    #values {
        display: flex;
        flex-direction: row;
        height: 30px;
        margin: 10px;
        font-size: 15px;
    }

    .value {
        margin: 12px;
    }
</style>

<body> 
    <?php
    // Helper functions
        function clog($str, $spacing = false) {
            echo nl2br($str . "\n");
            if($spacing)
                clog("");
        }

        function arr_clog($arr, $spacing = false) {
            foreach ($arr as $_) {
                clog($_);
            }
            if($spacing)
                clog("");
        }

    // Task 1. Strings
    // [1]
        $text = "hello world this is an amazing text";
        $symbol = "i";
        $replaceto = "_";
        $newtext = str_replace($symbol, $replaceto, $text);
        clog($text);
        clog($newtext, "\n");
    // [2]
        $cities = "Zhytomyr Kiev Lviv Kharkiv";
        $splitted = explode(" ", $cities);
        sort($splitted);
        arr_clog($splitted, "\n");
    // [3]
        $path = "D:\\WebServers\\home\\testsite\\www\\myfile.txt";
        $lastpos = strrpos($path, "\\") + 1;
        $filename = substr($path, $lastpos, strlen($path) - $lastpos - 4);
        clog($filename, "\n");
    // [4]
        $first = "10-02-2015";
        $second = "13-05-2016";
        $_first = explode("-", $first);
        $_second = explode("-", $second);
        
        $day = $_first[0] - $_second[0];
        $month = $_first[1] - $_second[1];
        $year = $_first[2] - $_second[2];
        $diff = abs($day + 30 * $month + 365 * $year);
        clog($diff, "\n");

    // [5]
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!-+)(*^%$#";
        $len = strlen($characters);
        $length = 9;
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= $characters[random_int(0, $len - 1)];
        }
        clog($str, true);

        if(preg_match("/[A-Za-z0-9@!-+)(*^%$#]/", $str) && strlen($str) >= 8)
            clog("It is strong!");
        else
            clog("Nah..", true);
        clog("\n\n\n");

    // Task 2. Arrays
    // [1]
        function repeating($arr) {
            return array_diff_assoc($arr, array_unique($arr));
        }

        $arr = [3, 9, 4, 2, 3, 9, 1];
        $duplicates = repeating($arr);
        arr_clog($duplicates, true);
    // [2]
        function generate($symbols) {
            $name = $symbols;
            shuffle($name);
            return implode($name);
        }

        clog(generate(["fa", "re", "sh", "ita"]), true);
    // [3]
        function create_array() {
            $arr = [];
            for($i = 0; $i < rand(2, 6); ++$i) {
                array_push($arr, rand(10, 20));
            }
            return $arr;
        }

        function insane($first, $second) {
            $arr = array_unique(array_merge($first, $second));
            sort($arr);
            return $arr;
        }

        $arr = create_array();
        arr_clog($arr, true);

        arr_clog(insane(create_array(), create_array()), true);
    // [4]
        $arr = array("Gleb"=>19, "Renat"=>43, "Timothy"=>57, "Someone"=>13);
        asort($arr);
        var_dump($arr);
        clog("\n\n\n");


    // Task 3. Form
    // [1]
        ?>
    <div id="main-container">
        <div id="labels">
            <div> Login: </div>
            <div> Password: </div>
            <div> Password 2: </div>
            <div> Gender: </div>
            <div> City: </div>
            <div id="container-games"> Fav. games: </div>
            <div id="container-about"> About: </div>
            <div id="container-photo"> Photo: </div>
        </div>
    
        <div id="interactions">
            <input>
            <input>
            <input>
            <div class="multiple-row">
                <input type="radio"> Male
                <input type="radio"> Female
            </div>
            <select>
                <option> Zhytomyr </option>
                <option> Kiev </option>
                <option> Lviv </option>
            </select>
            <div class="multiple-column">
                <input type="checkbox" id="c1">
                <label class="checkbox-label" for="c1"> Football </label>
                <input type="checkbox" id="c2">
                <label class="checkbox-label" for="c2"> Basketball </label>
                <input type="checkbox" id="c3">
                <label class="checkbox-label" for="c3"> Volleyball </label>
                <input type="checkbox" id="c4">
                <label class="checkbox-label" for="c4"> Chess </label>
                <input type="checkbox" id="c5">
                <label class="checkbox-label" for="c5"> World of Tanks </label>
            </div>
            <input id="about"> 

            <button> Register! </button>
        </div>
    </div>


    <div id="task4">
        <?php
            function sin__($n) {
                return sin($n);
            }

            function cos__($n) {
                return cos($n);
            }

            function tg__($n) {
                return tan($n);
            }

            function my_tg__($n) {
                return 1 / tan($n);
            }

            function xy($x, $y) {
                return pow($x, $y);
            }

            function xexclamation($n) {
                $factorial = 1; 
                for ($i = 1; $i <= $n; $i++){ 
                $factorial = $factorial * $i; 
                } 
                return $factorial; 
            }

            
            ?>

        <div id="titles">
            <div> x^y </div>
            <div> x! </div>
            <div> my_tg(x) </div>
            <div> sin(x) </div>
            <div> cos(x) </div>
            <div> tg(x) </div>
        </div>

        <?php
            $x = 4;
            $y = 5;
        ?>

        <div id="values">
            <div class="value">
                <?php
                    echo xy($x, $y);
                ?>
            </div>

            <div class="value">
                <?php
                    echo xexclamation($x);
                ?>
            </div class="value">

            <div class="value">
                <?php
                    echo round(my_tg__($x), 3);
                ?>
            </div>

            <div class="value">
                <?php
                    echo round(sin__($x), 3);
                ?>
            </div>

            <div class="value">
                <?php
                    echo round(cos__($x), 3);
                ?>
            </div>

            <div class="value">
                <?php
                    echo round(tg__($x), 3);
                ?>
            </div>
        </div>
    </div>
</body>
</html>