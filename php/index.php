
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "hello , today is " . date("d/m/y") ;
        $color = "red";
        $x = $y = $z = "fruit";
        $txt1 = "Learn PHP";
        $txt2 = "FPK university";
        function pr($txt1, $txt2){
        // echo , Echo, ECHO
        
        echo "<p><h2> $txt1 at $txt2 </h2></p>";
        echo '<p> Study PHP at '. $txt2 .'</p>';
        }
        pr($txt1, $txt2);
        function saluer($nom = "utilisateur") {
            echo "Bonjour, $nom !<br>";
           }
        saluer(); // Affichera "Bonjour, utilisateur !"
        saluer("Alice"); // Affichera "Bonjour, Alice !"
        function somme(...$nombres) {
            return array_sum($nombres);
           }
        echo somme(2, 4, 6); // Affichera 12
        
    ?>
</body>
</html>

