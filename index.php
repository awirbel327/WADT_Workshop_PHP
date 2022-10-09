<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style.php" media="screen"> for the next time-->
    <link rel="stylesheet" href="php.css">
    <title>PHP Homework</title>
</head>

<body>
    <?php
        function dateAndTime(){
          
            echo "<br>The date is: " .date('d-m-Y'); 
            echo "<br>The time is: " . date("h:i:sa");
        }
    ?>
    <br><br><br>

    <form  action="returnData.php" method="post">
    Surename: <input type="text" name="surename"><br><br>
    Name: <input type="text" name="name"><br><br>
    Birthday: <input type="text" name="bday"><br><br>
    <input type="submit">
    </form>
    <br><br>
    
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Unicorn GmbH & Co. kg</div>
        <?php
        dateAndTime();
        ?>
    </footer>
</body>
</html>
