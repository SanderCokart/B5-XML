<?php
$xml = simplexml_load_file('./b5-studieblok-3-opdracht-2-gastenboek.xml');
echo '<div style="text-align: center; background-color: navajowhite">';
foreach ($xml as $bericht) {
    echo 'Van: ' . $bericht->van . '</br>';
    echo 'Bericht: ' . $bericht->bericht . '</br>';
    echo 'Datum: ' . $bericht->datum . '</br>';
    echo '<hr>';
}
echo '</div>';
