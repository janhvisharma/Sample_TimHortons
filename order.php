<!DOCTYPE html>
<!--
Janhvi Sharma
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tim Horton's Orders</title>
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
        <div class="coffee">
            <h1> Thanks for your order! Here it is : </h1>
        </div>
        <br>
        <?php
        //get data from html file
        $num_coffee = $_POST["num_coffee"];
        $size = $_POST["size"];
        $num_cream = $_POST["num_cream"];
        $num_sugar = $_POST["num_sugar"];

        //validations
        if (empty($num_coffee)){
		echo "Please enter the number of coffees! <br>";
        }
        else if($num_coffee==0){
            echo "Number of coffees should be 1 or more! <br>";
        }
        if ($size == ""){
		echo "Please select the cofee size! <br>";
        }
        if($num_cream<0 || $num_sugar<0 ){
            echo "These quanties cannot be negative! <br>";
        }

        //calculating price of coffee
        $coffee_price = 0;
        for ($i = 0; $i < $num_coffee; $i++) {

            echo '<div class="coffee">';

            switch ($size) {
                case "small" : echo '<img src="_images/cup.jpg" alt="coffee cup" class="small-img">';
                    $coffee_price = 1.6;
                    break;
                case "medium" : echo '<img src="_images/cup.jpg" alt="coffee cup" class="med-img">';
                    $coffee_price = 1.8;
                    break;
                case "large" : echo '<img src="_images/cup.jpg" alt="coffee cup" class="large-img">';
                    $coffee_price = 2.0;
                    break;
                case "xlarge" : echo '<img src="_images/cup.jpg" alt="coffee cup" class="xlarge-img">';
                    $coffee_price = 2.2;
                    break;
            }
            if ($num_sugar > 0) {
                echo '<img src="_images/plus.jpg" alt="plus sign" class="order-img">';
                for ($j = 0; $j < $num_sugar; $j++) {
                    echo '<img src="_images/sugar.jpg" alt="sugar" class="order-img">';
                }
            }
            if ($num_cream > 0) {
                echo '<img src="_images/plus.jpg" alt="plus sign" class="order-img">';
                for ($k = 0; $k < $num_cream; $k++) {
                    echo '<img src="_images/cream.jpg" alt="cream" class="order-img">';
                }
            }
            echo '</div>';
        }

        //calculating total price
        $total_price = $coffee_price * $num_coffee + number_format((0.13 * $coffee_price), 2);

        // apply formatting to the dollar amount
        $total_price_formatted = "$" . $coffee_price . " x " . $num_coffee . " + " . number_format((0.13 * $coffee_price), 2) . " =  $" . $total_price;
        echo '<br>';
        echo '<div class="coffee">';
        echo '<p id="cost">Your total bill is : ' . $total_price_formatted . '<br/> Visit again soon!</p>';
        echo '</div>';
        ?>
    </body>
</html>


