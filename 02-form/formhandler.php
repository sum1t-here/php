<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

// if (isset($_POST["submit"])) {

// }


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    // htmlspecialchars -> allows no code to be injected
    // & -> &amp
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favourite-pet"]);
    // htmlentities() same as htmlspecialchars

    if(empty($firstname) || empty($lastname) || empty($favouritepet)){
        header("Location: ./index.php");
        exit();
    }

    echo "These are the data user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    header("Location: ./index.php");
}
else{
    header("Location: ./index.php");
}