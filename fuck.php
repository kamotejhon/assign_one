<html> 
<head>
<meta charset=utf-8 />
<title>JavaScript program to calculate multiplication and division of two numbers </title>
<style type="text/css">
body {margin: 30px;}
</style> 
</head>
<body>
<form>

    1st Number : <input type="number" id="firstNumber" /><br>
    2nd Number: <input type="number" id="secondNumber" /><br>
        <input type="button" onClick="multiplyBy()" Value="Multiply" />
        <input type="button" onClick="divideBy()" Value="Divide" />
</form>
        <p>The Result is : <br>
        <span id = "result"></span>
        </p>

    <?php
        function multiplyBy()
{
        document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        document.getElementById("result").innerHTML = num1 * num2;
}
    ?>
        
    

</body>
</html>