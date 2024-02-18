<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num1" placeholder="Enter a number" required />
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter a number" required />
        <button>Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $op = htmlspecialchars($_POST["operator"]);
    }


    $error = false;

    if (empty($num1) || empty($num2)) {
        echo "<p> Fill in all fields </p>";
        $error = true;
    }

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p> Only numbers </p>";
        $error = true;
    }

    if (!$error) {
        $val = 0;
        switch ($op) {
            case "add":
                $val = $num1 + $num2;
                break;
            case "sub":
                $val = $num1 - $num2;
                break;
            case "mul":
                $val = $num1 * $num2;
                break;
            case "div":
                $val = $num1 / $num2;
                break;
            default:
                echo "<p>Something went wrong</p>";
        }
        echo '<p>Result =' . $val . '</p>';
    }
    ?>
</body>

</html>