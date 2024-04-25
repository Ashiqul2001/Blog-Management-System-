<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="home">
    <?php
    
    setcookie("name", "", time() - (60*60*24* 30),"/");
    setcookie("password", "", time() - (60*60*24* 30),"/");
    session_start();
    session_unset();
    session_destroy();

    header("location:".dirname(__FILE__)."/../View/home.php");
    ?>
</body>
</html>