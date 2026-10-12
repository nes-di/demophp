<?php
$maVariableTitre = "Ma Demo PHP";
$maVariableNomTache = "Mon nom de tache";
$maVariableDifficulteTache = "Ma description de tache";
$maVariableTempsTache = "Mon temps de tache";
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
        <p><?= $maVariableTempsTache; ?></p>    
    </main>

    <footer>
    </footer>
</body>
</html>


