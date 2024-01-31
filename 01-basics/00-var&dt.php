<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- embedding php & html -->
    <p>This is a paragraph</p>
    <?php echo"This is a also a paragraph";?>
    <br>
    <!-- variable -->
    <?php 
    $task = "Learning PHP";
    echo $task;
    ?>
    <!-- data types -->
    
    <?php
    // scalar types
    $string = "Hello world"; // def = ""
    $int = 12345; // def = 0
    $float = 4.45; // def = 0
    $bool = false; // def = false

    // Array type
    $array = array("Ironman", "Hulk", "Ct.America");
    $name = ["Ironman", "Hulk", "Ct.America"]; // def = []

    // object type
    $object = new Car(); // def = null
    ?>
</body>
</html>