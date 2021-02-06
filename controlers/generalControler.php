<?php
include_once("views/generiqueView.php");
include_once("assets/phpChart_Lite/conf.php");
$html = "";
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)), 'basic_chart');

if (isset($_GET['p'])) {
    if ($_GET['p'] == 'graphique') {
        $html .= $head . buildNav($_GET['p']) . $bodyGraph . $pc->draw() .  $footer;
    } elseif ($_GET['p'] == 'connexion') {
        $html .= $head . buildNav($_GET['p']) . $bodyConnexion . $footer;
    }
} else {
    $html .= $head . buildNav('') . $body . $footer;
}
