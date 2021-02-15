<?php
include_once("views/generiqueView.php");
$html = "";

if (isset($_GET['p'])) {
    if ($_GET['p'] == 'graphique') {
        $html .= setHead() . buildNav($_GET['p']) . setBody('grahpique') .  setFooter();
    } elseif ($_GET['p'] == 'connexion') {
        $html .= setHead() . buildNav($_GET['p']) . setBody('connexion') . setFooter();
    }
} else {
    $html .= setHead() . buildNav('') . setBody() . setFooter();
}
