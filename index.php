<!doctype html>
<html lang="en">
<head>
    <?    /**
     * Підключення інклуд include "css/style.css
     */ ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="цифри, цілі числа, числа з крапкою, змінні">
    <link rel="stylesheet" href="style.css">
    <title>My first project</title>
</head>
    <body>
        <?php

        // Змінні

        $str1 = 'переменная 1';
        $str2 = 'переменная 2';
        $str3 = 'переменная 3';

        $number1 = 3; // int
        $number2 = 4; // int
        $number3 = 5; // int

        $num1 = 0.5; // float
        $num2 = 0.4; // float
        $num3 = 0.3; // float

        $str4 = '“My first project”.';

        // Масиви

        // Одномірні масиви
        $name = array("Bohdan", "Olena", "Ruslan", "Anna", "Mark" );
        echo $name [0] .'<br>' ;

        $name [0] = "Bohdan";
        $name [1] = "<strong> PHP </strong>";
        $name [3] = 34;
        echo $name[0], "&nbsp is &nbsp" , $name[3], "&nbsp Iknow &nbsp", $name[1]. '<br>';

        // Асоціативний масив

        $Associative = ["care" => 12, "motorbike" => 9, "bike" =>8];
        echo $Associative ["care"].'<br>';
        echo $Associative ["motorbike"]. '<br>';
        echo $Associative ["bike"]. '<br>';

        // Багатомірні масиви

        $auto = [
            ["Color", "Speed", "Model" ],
            ["kia","white", "200"],
            ["reno", "grey", "199"],
            ["toyota", "white", "122"],

        ];
        echo $auto[1][0];?>

        <?
        /**
         * Я мав на увазі взяти в блоки числа та срінгові фрази
         */
        ?>

        <div class="int">
            <? echo($number1 + $number2 + $number3 . '<br>'); ?>
        </div>
        <div class="float">
            <? echo $num1 + $num2 + $num3 . '<br>'; ?>
        </div>
        <div class="text">
            <? echo $str4 . '<br>'; ?>
        </div>


        <!--Таблиці-->
        <table border = "1" cellpadding = "15" style = "border-collapse: collapse"; width="50%";>
            <tr style="background-color: silver">
                <th><? echo $auto [0][0]; ?></th>
                <th><? echo $auto [0][1]; ?></th>
                <th><? echo $auto [0][2]; ?></th>
            </tr>
            <tr>
                <td><? echo $auto [1][1]; ?></td>
                <td><? echo $auto [1][2]; ?></td>
                <td><? echo $auto [1][0]; ?></td>
            </tr>
            <tr>
                <td><? echo $auto [2][1]; ?></td>
                <td><? echo $auto [2][2]; ?></td>
                <td><? echo $auto [2][0]; ?></td>
            </tr>
            <tr>
                <td><? echo $auto [3][1]; ?></td>
                <td><? echo $auto [3][2]; ?></td>
                <td><? echo $auto [3][0]; ?></td>
            </tr>

        </table>
        <?
            // Завдання №3 "Гра"
            $rand = rand (0,5);
            echo $rand . '<br>';
            if ($rand == 5)
                echo "Ви виграли!" .'<br>';
             else
                echo "Ви програли :(" .'<br>';

        ?>

        <!--Додаткове завдання-->
        <form id="form1" name="form1" method="post" action="game.php">
            <label>Число
                <select name="choose" id="choose">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </label>
            <label>
                <input type="submit" name="submit" id="submit" value="Играть!" />
         <form/>   </label>
    </body>

</html>



