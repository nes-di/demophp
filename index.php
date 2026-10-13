<?php
$maVariableTitre = "Ma Demo PHP";
$maVariableNomTache = "Nom de tache";
$maVariableDifficulteTache = "Difficulté de tache";
$maVariableTacheFinie = "Tache finie";
$maVariableTacheFinie = false;
require __DIR__ . '/data.php';

function compter_taches($taches) {
    return "Nombre de taches: " . count($taches) . "<br>" . "Nombre de taches finies: " . array_sum(array_column($taches, 'finie'));
}
function libelle_difficulte($difficulte) {
    switch ($difficulte) {
        case "Facile":
            return "Facile";
        case "Moyenne":
            return "Moyenne";
        case "Difficile":
            return "Difficile";
        default:
            return "Difficulté non définie";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $maVariableTitre; ?></title>
</head>
<body>
    <?php include __DIR__ . '/header.php'; ?>
    <main>
        <p><?= compter_taches($taches); ?></p>
        <?php foreach ($taches as $tache) { ?>
            <div>
                <h2><?= $tache["nom"]; ?></h2>
                <p>Difficulté: <?= libelle_difficulte($tache["difficulte"]); ?></p>
                <p><?php if ($tache["finie"]) {
                    echo "La tache est finie";} 
                    else {
                        echo "La tache n'est pas finie";} ?></p>
            </div>
        <?php } ?>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>
</body>
</html>


