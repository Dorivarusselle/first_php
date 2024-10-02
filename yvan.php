<?php

   use Dompdf\dompdf;
   use Dompdf\options;


require 'vendor/autoload.php';

$date = date('d-m-y h:i:s');

$options = new options();
$options->set('defaultFont','courier');

ob_start();
require_once "doriva.php";
$html = ob_get_contents();

ob_end_clean();

$pdf = new Dompdf($options);
$pdf -> LoadHtml($html);
$pdf -> setPaper('A4','landscape');
$fichier = 'RESULTATS';
$pdf -> render();
$pdf -> stream($fichier);





?>