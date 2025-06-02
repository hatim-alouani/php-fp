<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <lable> login:</lable>
        <input type="text" name ="login"><br>
        <lable> password:</lable>
        <input type="password" name ="password"><br>
        <input type="submit" value="se connecter">
    </form>
</body>
</html>

<?php
    $LOGIN = "admin";
    $PWD = "ADMIN";
    if (!isset($_POST['login']) || !isset($_POST['password']))
        exit("please enter login/password");
    $log = $_POST['login'];
    $password = $_POST['password'];
    if ($log != $LOGIN || $password != $PWD){
        echo ("Login ou mot de passe incorrect");
        $_SESSION['essais']--;
        $ess = $_SESSION['essais'];
        if ($_SESSION['essais'] <= 0){
            echo "try again later";
            session_destroy();
        }
        else {
            echo "Il vous reste $ess essais";
        }
    }
    else {
        $_SESSION['auth'] = true;
        header("location: profil.php");
        exit;
    }

?>