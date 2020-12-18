<?php
$xml = simplexml_load_file('./personen.xml');
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>';
echo '<table class="table" border="true">';
echo '<thead><tr>';
echo '<td>Voornaam</td>';
echo '<td>Achternaam</td>';
echo '<td>Geslacht</td>';
echo '<td>Geboortedatum</td>';
echo '<td>Lengte</td>';
echo '<td>Gewicht</td>';
echo '<td>Haarkleur</td>';
echo '</tr></thead>';
foreach ($xml as $persoon) {
    echo '<tr>';
    echo '<td>' . $persoon->voornaam . '</td>';
    echo '<td>' . $persoon->achternaam . '</td>';
    echo '<td>' . $persoon->geslacht . '</td>';
    echo '<td>' . $persoon->geboortedatum . '</td>';
    echo '<td>' . $persoon->lengte_in_cm . '</td>';
    echo '<td>' . $persoon->gewicht_in_kg . '</td>';
    echo '<td>' . $persoon->haarkleur . '</td>';
    echo '</tr>';
}
echo "</table>";
echo "<a href='personen_view.php'>View XML in browser.</a>";