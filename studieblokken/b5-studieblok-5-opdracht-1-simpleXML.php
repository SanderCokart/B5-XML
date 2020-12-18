<?php
$xml = simplexml_load_file('https://www.w3schools.com/xml/cd_catalog.xml') or die(['xml could not be loaded']);
echo '<div style="text-align: center; background-color: navajowhite">';
foreach ($xml as $cd) {
    echo 'TITLE: ' . $cd->TITLE . '</br>';
    echo 'ARTIST: ' . $cd->ARTIST . '</br>';
    echo 'COUNTRY: ' . $cd->COUNTRY . '</br>';
    echo 'COMPANY: ' . $cd->COMPANY . '</br>';
    echo 'PRICE: ' . $cd->PRICE . '</br>';
    echo 'YEAR: ' . $cd->YEAR . '</br>';
    echo '<hr>';
}
echo '</div>';
