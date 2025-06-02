
<?php
    $etudiants = [
        "Ali" => 15,
        "Sara" => 9,
        "Youssef" => 17,
        "Khadija" => 12,
        "Mehdi" => 8
    ];
    function afficher_resultats($etudiants) {
        $somme = 0;
        $nb_etudiants = count($etudiants);
        
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>";
        
        foreach ($etudiants as $nom => $note) {
            $resultat = ($note >= 10) ? "Réussi" : "Échoué";
            echo "<tr><td>$nom</td><td>$note</td><td>$resultat</td></tr>";
            $somme += $note;
        }
        
        $moyenne = $somme / $nb_etudiants;
        
        echo "</table>";
        echo "<p><strong>Moyenne de la classe : </strong>" . round($moyenne, 2) . "</p>";
    }
    
    // Appel de la fonction
    afficher_resultats($etudiants);
?>