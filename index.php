<?php
$maVariableTitre = "Ma Demo PHP";
$maVariableNomTache = "Nom de tache";
$maVariableDifficulteTache = "Difficulté de tache";
$maVariableTacheFinie = "Tache finie";
$maVariableTacheFinie = false;
$taches = [
    [   
        "id" => 1,
        "nom" => "Tache 1",
        "difficulte" => "Facile",
        "finie" => true
    ],
    [
        "id" => 2,
        "nom" => "Tache 2",
        "difficulte" => "Moyenne",
        "finie" => false
    ],
    [
        "id" => 3,
        "nom" => "Tache 3",
        "difficulte" => "Difficile",
        "finie" => true
    ],
    [
        "id" => 4,
        "nom" => "Tache 4",
        "difficulte" => "Très difficile",
        "finie" => false
    ],
    [
        "id" => 5,
        "nom" => "Tache 5",
        "difficulte" => "Extrême",
        "finie" => true
    ],
];
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
        <h2>"Nombre de taches": <?= count($taches) ?></h2>
        <h2>"Nombre de taches finies": <?= array_sum(array_column($taches, 'finie')) ?></h2> 
        <?php foreach ($taches as $tache) { ?>
            <div>
                <h2><?= $tache["nom"]; ?></h2>
                <p>Difficulté: <?= $tache["difficulte"]; ?></p>
                <p><?php if ($tache["finie"]) {
                    echo "La tache est finie";} 
                    else {
                        echo "La tache n'est pas finie";} ?></p>
            </div>
        <?php } ?>
    </main>

    <footer>
    </footer>
</body>
</html>


