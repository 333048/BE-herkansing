<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '    <link rel="stylesheet" href="../css/style.css">';
echo '    <meta charset="UTF-8">';
echo '    <meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <title>Toets</title>';
echo '</head>';
echo '<body>';

$overzichtModel = new OverzichtModel();
$data = $overzichtModel->getLeerlingen();

echo '<h1>Overzicht Leerlingen en Lespakketten</h1>';
echo '<table>';
echo '<tr><th>Naam Leerling</th><th>Lespakket</th><th>Aantal Lessen</th><th>Rijbewijscategorie</th><th>Prijs</th><th>Startdatum Rijlessen</th><th>Datum Rijbewijs Behaald</th></tr>';

foreach ($data as $leerling) {
    echo '<tr>';
    echo '<td>' . $leerling->Voornaam . ' ' . $leerling->Tussenvoegsel . ' ' . $leerling->Achternaam . '</td>';
    echo '<td>' . $leerling->paketnaam . '</td>';
    echo '<td>' . $leerling->aantallessen . '</td>';
    echo '<td>' . $leerling->rijbewijscategorie . '</td>';
    echo '<td>' . $leerling->prijs . '</td>';
    echo '<td>' . $leerling->startdadumrijlessen . '</td>';
    echo '<td>' . $leerling->datumrijbewijsbehaald . '</td>';
    echo '</tr>';
}


echo '</table>';
echo '</body>';
echo '</html>';
