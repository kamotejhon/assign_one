<html>
<head>
<title> Welcom To my Browse</title>
</head>
<body>
    <h1>Exercise Number 2</h1>
        <form action = "exercise2.php" method = "get" > 
            <p>Input First Number <br><br> <input type="number" placeholder = "Enter Number" name="num1">
            <br><br>
            Input Second Number<br><br> <input type="number" placeholder = "Enter Number" name="num2">
            <p><br><br>

            <button type="submit" name= "addition" >+</button>
            <button type="submit" name= "subtraction" >-</button>
            <button type="submit" name= "multiplication" >*</button>
            <button type="submit" name= "division" >/</button>
        </form>  
        <br>

        <?php

            if (isset($_GET["addition"]))
            {
     
                $n1 = $_GET["num1"];
                $n2 = $_GET["num2"];

                $total = $n1 + $n2;
                echo "ADDITION : ". $total;
            }

            if (isset($_GET["subtraction"]))
            {
     
                $n1 = $_GET["num1"];
                $n2 = $_GET["num2"];

                $total = $n1 - $n2;
                echo "SUBTRACTION : ". $total;
            }

            if (isset($_GET["multiplication"]))
            {
     
                $n1 = $_GET["num1"];
                $n2 = $_GET["num2"];

                $total = $n1 * $n2;
                echo "MULTIPLICATION : ". $total;
            }

            if (isset($_GET["division"]))
            {
     
                $n1 = $_GET["num1"];
                $n2 = $_GET["num2"];

                $total = $n1 / $n2;
                echo "DIVISION : ". $total;
            }
        ?>

        <form action = "index.php" method = "get" > 
                 <br><br><br>
                 <input type="submit" value="back">
            </form>
     
</body>
</html>
