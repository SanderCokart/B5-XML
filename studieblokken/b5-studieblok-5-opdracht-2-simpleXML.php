<?php
$xml = simplexml_load_file('https://www.w3schools.com/xml/plant_catalog.xml');
echo '<div style="text-align: center; background-color: lightcyan">';
foreach ($xml as $plant) {
    echo 'TITLE: ' . $plant->COMMON . '</br>';
    echo 'ARTIST: ' . $plant->BOTANICAL . '</br>';
    echo 'COUNTRY: ' . $plant->ZONE . '</br>';
    echo 'COMPANY: ' . $plant->LIGHT . '</br>';
    echo 'PRICE: ' . $plant->PRICE . '</br>';
    echo 'YEAR: ' . $plant->AVAILABILITY . '</br>';
    echo '<hr>';
}
echo '</div>';
