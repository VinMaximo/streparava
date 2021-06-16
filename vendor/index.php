<?php

require __DIR__.'\autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtmlFile(__DIR__.'/public/aprovacao35/aprovar35.html');

$dompdf->render();

header('Content-type: application/pdf');
echo $dompdf->output();