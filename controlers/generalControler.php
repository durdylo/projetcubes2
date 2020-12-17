<?php
include_once("views/generiqueView.php");
$html = "";

if (isset($_GET['p'])) {
    if ($_GET['p'] == 'graphique') {
        $html .= $head . buildNav($_GET['p']) . $bodyGraph . $footer;
    }
} else {
    $html .= $head . buildNav('') . $body . $footer;
}
