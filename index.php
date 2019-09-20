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
    <body id="index">
        <div id="content">
            <img src="_images/logo2.png" id="img1" alt="Logo">
            <h1> Welcome to Tim Horton's ! </h1>
            <h2> Bienvenue chez Tim Horton's ! </h2><br/><br/>
            <div id="box">
                <form name="myForm" action="order.php" method="post">  
                    <h3> Order your coffee here :-- </h3>
                    <div id="data">
                        <label>Number of Coffees: </label>
                        <input type="number" name="num_coffee" min="0" oninput="check(this)" value="" required><br>
                        <label>Size:</label>
                        <select name="size" required>
                            <option value="">Select a size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="xlarge">X-Large</option>
                        </select><br>
                        <label>How many creams?</label>
                        <input type="number" name="num_cream" min="0" value="0" required><br>
                        <label>How many sugars?</label> 
                        <input type="number" name="num_sugar" min="0" value="0" required><br>
                    </div>
                    <div id="buttons">
                        <input type="submit" id="submit" value="Order Coffee">
                    </div>
                </form>
                <script>
                    function check(input) {
                        if (input.value == 0) {
                            input.setCustomValidity("Number of coffees should be 1 or more!");
                        } else {
                            input.setCustomValidity('');
                        }
                    };
                </script>
            </div>
            <img src="_images/logo3.png" id ="img2" alt="Logo"/>
        </div>
    </body>
</html>
