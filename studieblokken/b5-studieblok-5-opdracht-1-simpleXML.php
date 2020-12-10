<?php
wecho '<div style="text-align: center; background-color: navajowhite">';
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
