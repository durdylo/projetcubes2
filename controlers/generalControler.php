<?php
include_once("views/generiqueView.php");
include_once("assets/phpChart_Lite/conf.php");
$html = "";
$s1 = array(11, 9, 5, 12, 14);
$s2 = array(6, 8, 7, 13, 9);

$pc = new C_PhpChartX(array($s1, $s2), 'basic_chart');
$pc->set_animate(true);
$pc->set_title(array('text' => 'Basic Chart'));


//set phpChart grid properties
$pc->set_grid(array(
    'background' => 'lightyellow',
    'borderWidth' => 0,
    'borderColor' => '#000000',
    'shadow' => true,
    'shadowWidth' => 10,
    'shadowOffset' => 3,
    'shadowDepth' => 3,
    'shadowColor' => 'rgba(230, 230, 230, 0.07)'
));


//set axes
$pc->set_xaxes(array(
    'xaxis'  => array(
        'borderWidth' => 2,
        'borderColor' => '#999999',
        'min' => '0',
        'max' => 8,
        'tickOptions' => array('showGridline' => false)
    )
));

$pc->set_yaxes(array(
    'yaxis' => array(
        'borderWidth' => 0,
        'borderColor' => '#ffffff',
        'autoscale' => true,
        'min' => '0',
        'max' => 20,
        'numberTicks' => 21,
        'label' => 'Energy Use'
    )
));
$pc->draw();
if (isset($_GET['p'])) {
    if ($_GET['p'] == 'graphique') {
        $html .= $head . buildNav($_GET['p']) . $bodyGraph . $pc->draw() .  $footer;
    } elseif ($_GET['p'] == 'connexion') {
        $html .= $head . buildNav($_GET['p']) . $bodyConnexion . $footer;
    }
} else {
    $html .= $head . buildNav('') . $body . $footer;
}
