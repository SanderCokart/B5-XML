<?php
$personen = simplexml_load_file('./personen.xml') or die(['xml could not be loaded']);
header('Content-type: text/xml');
echo '<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
echo '<personen>';
foreach ($personen as $persoon) {
    echo '<persoon>';
    echo '<voornaam>' . $persoon->voornaam . '</voornaam>';
    echo '<achternaam>' . $persoon->achternaam . '</achternaam>';
    echo '<geslacht>' . $persoon->geslacht . '</geslacht>';
    echo '<geboortedatum>' . $persoon->geboortedatum . '</geboortedatum>';
    echo '<lengte_in_cm>' . $persoon->lengte_in_cm . '</lengte_in_cm>';
    echo '<gewicht_in_kg>' . $persoon->gewicht_in_kg . '</gewicht_in_kg>';
    echo '<haarkleur>' . $persoon->haarkleur . '</haarkleur>';
    echo '</persoon>';
}
echo "</personen>";