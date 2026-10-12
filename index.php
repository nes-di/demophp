<?php
$maVariableTitre = "Ma Demo PHP";
$maVariableNomTache = "Nom de tache";
$maVariableDifficulteTache = "Difficulté de tache";
$maVariableTacheFinie = "Tache finie";
$maVariableTacheFinie = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $maVariableTitre; ?></title>
</head>
<body>
    <header>
        <h1><?= $maVariableTitre; ?></h1>
    </header>

    <main>
        <p><?= $maVariableNomTache; ?></p>
        <p><?= $maVariableDifficulteTache; ?></p> 
        <p><?php if ($maVariableTacheFinie) {
            echo "La tache est finie";} 
            else {
                echo "La tache n'est pas finie";} ?></p>
    </main>

    <footer>
    </footer>
</body>
</html>


