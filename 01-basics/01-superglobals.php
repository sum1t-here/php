<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_GET["name"];
    // url?name=heelo
    echo "<br>";
    echo $_REQUEST["name"];
    // it looks for get, post and cookies
    echo "<br>";
    // echo $_FILES[]
    // grab info about a file
    // echo $_COOKIE[]
    $_SESSION["Username"] = "Stark";
    echo $_SESSION["Username"];
    $_ENV[""]

    ?>
</body>
</html>