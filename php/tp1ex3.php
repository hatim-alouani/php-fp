<html> 
    <body>
    <form method="post">
        <lable> Enter notes </lable>
        <input type="text" name="notes">
        <input type="submit" value="send">
    </form>
</body>
</html>

<?php

    function validation($notes){
        foreach ($notes as $note){
            if ($note > 20 || $note < 0)
                return 0;
        }
        if (count($notes) != 5)
            return 0;
        return 1;
    }

    function calcule_moyen($notes){
        return array_sum($notes) / count($notes);
    }
    function calcule_max($notes){
        $max = $notes[0];
        foreach ($notes as $note){
            if ($note > $max)
                $max = $note;
        }
        return $max;
    }
    function calcule_min($notes){
        $min = $notes[0];
        foreach ($notes as $note){
            if ($note < $min)
                $min = $note;
        }
        return $min;
    }
    if (!isset($_POST['notes']))
        exit('please enter your notes');
    $notes= $_POST['notes'];
    $notes = explode(',', $notes);
    if (!validation($notes))
        exit('error');
    $moyen = calcule_moyen($notes);
    $max = calcule_max($notes);
    $min = calcule_min($notes);
    rsort($notes);
    echo "<table>
            <tr><th>Max</th><th>Min</th><th>Moyenne</th></tr>
            <tr><td>$max</td><td>$min</td><td>$moyen</td></tr>
          </table>";
    echo "<h3>Notes triées par ordre décroissant :</h3>";
    echo "<table><tr>";
    foreach($notes as $note){
        echo "<td>$note</td>";
    }
    echo "</tr></table>";
?>