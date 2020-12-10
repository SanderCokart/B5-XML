<?php
$xml = simplexml_load_file('./b5-studieblok-3-opdracht-2-gastenboek.xml');
header('Content-type: text/xml');
echo '<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
echo '<gastenboek>';
foreach ($xml as $bericht) {
    echo '<bericht>';
    echo '<van>' . $bericht->van . '</van>';
    echo '<bericht>' . $bericht->bericht . '</bericht>';
    echo '<datum>' . $bericht->datum . '</datum>';
    echo '</bericht>';
}
echo "</gastenboek>";