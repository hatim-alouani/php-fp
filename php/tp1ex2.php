<!DOCTYPE html>
<html>
<body>
    <form action="index.php" method="post">
        <lable> age:</lable>
        <input type="text" name ="age"><br>
        <input type="submit" value="result">
    </form>
</body>
</html>

<?php
    $age = (int)$_POST['age'];
    if ($age <= 0 || !is_numeric($age))
        echo 'error';
    else {
        if ($age < 18)
            echo "Vous êtes mineur";
        else if ($age >= 18 && $age <= 65)
            echo "Vous êtes un adulte";
        else
            echo "Vous êtes un senior";
    }
?>