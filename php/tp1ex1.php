<!DOCTYPE html>
<html>
<body>
    <form action="index.php" method="post">
        <lable> number1:</lable>
        <input type="text" name ="number1"><br>
        <lable> number2:</lable> 
        <input type="text" name ="number2"> <br>
        <lable> operator  : </lable> 
        <input type="text" name ="operator"><br>
        <input type="submit" value="result">
    </form>
</body>
</html>

<?php
    function calculateur($a, $b, $operator){
        if (!is_numeric($a) || !is_numeric($b))
            return 0;
        if ($operator == '+')
            return $a + $b;
        else if ($operator == '-')
            return $a - $b;
        else if ($operator == '*')
            return $a * $b;
        else if ($operator == '/' && $b)
            return $a / $b;
        else
            exit("erorrrrrrrrrrrrrrrrrrrrrrrrrrrrr");
    }

    if (!isset($_POST['number1']) || !isset($_POST['number2']) || !isset($_POST['operator']))
        exit("please enter numbers/operator");
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
    $result = calculateur($number1, $number2, $operator);
    if ($result == 0)
        echo "please enter valid numbers/operator";
    else 
        echo "Résultat de $number1 $operator $number2 = $result";
?>