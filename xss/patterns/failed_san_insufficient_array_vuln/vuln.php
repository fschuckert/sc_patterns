<?php

require_once('./san.php');

if (PMA_isValid($_GET['param'], 'array')) {
    $visualizationSettings = $_GET['param'];
}

?>

<div id="placeholder" style="width:<?php echo($visualizationSettings['width']); ?>px;height:<?php echo($visualizationSettings['height']); ?>px;">