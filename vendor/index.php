<?php

require __DIR__.'\autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;



//$dompdf->loadHtml('<b> Olá mundo </b>');

$options = new Options();
$options->setChroot(__DIR__);

$dompdf = new Dompdf($options);

$dompdf->loadHtmlFile('../vendor/arquivo.html');
$dompdf->render();

header('Content-type: application/pdf');
echo $dompdf->output();