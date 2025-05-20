
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <lable> quantity:</lable>
        <input type="text" name ="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>


<?php
    $item = "piza";
    $price = 10;
    $quantity = $_POST['quantity'];
    $total = null;

    $total = $price * $quantity;
    echo "The total price for $quantity $item is $total";
?>