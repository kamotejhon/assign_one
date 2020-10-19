<html>
<head>
<title> Welcom To my Browse</title>
</head>
<body>
    <h1>Exercise Number 1 </h1>

        <form action = "exercise1.php" method = "get" > 
            <input type="text" placeholder="Username" name="name" >
                 <input type="submit" name="try">
        </form>  

        <h3>
        <?php
           if (isset($_GET['try']))
           {
               echo "Your Name is: ".$_GET["name"];
           } 
        ?>
        
        
</html>
