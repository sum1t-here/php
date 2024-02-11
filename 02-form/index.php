<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formhandler.php" method="post">
        <!-- action="<?php echo $_SERVER["PHP_SELF"];?>" prone to xss -->
        <!-- post: donot show data -->
        <!-- get: shows data in browser -->
        <label for="firstname">Firstname</label>
        <input type="text" placeholder="Firstname" name="firstname">

        <label for="lastname">Lastname</label>
        <input type="text" placeholder="Lastname" name="lastname">

        <label for="favourite-pet">Favourite Pet ?</label>
        <select name="favourite-pet" id="favourite-pet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>