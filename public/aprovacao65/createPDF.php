<?php
include_once("../../data/connection.php");


require_once 'domPDF/vendor/autoload.php';

use Dompdf\Dompdf;

if (isset($_GET["etiqueta"])) {
    $etiqueta = $_GET["etiqueta"];
    $sqlG65 = "SELECT * FROM G65 WHERE etiqueta = " . $etiqueta;
    $resultado = $connection->query($sqlG65);
    $G65 = $resultado->fetch_assoc();
    $codigo = $G65["codigo"];
    $operador = $G65["operador"];
    $operador2 = $G65["operador2"];
    $operador3 = $G65["operador3"];
    $esmagamento_dir = $G65["esmagamento_dir"];
    $montagem_dir = $G65["montagem_dir"];
    $esmagamento_esq = $G65["esmagamento_esq"];
    $montagem_esq = $G65["montagem_esq"];
    $oscilacao_esq = $G65["oscilacao_esq"];
    $oscilacao_dir = $G65["oscilacao_dir"];
    $operacao1 = $G65["operacao1"];
    $operacao1op = $G65["operacao1op"];
    $operacao2 = $G65["operacao2"];
    $operacao2op = $G65["operacao2op"];
    $operacao3 = $G65["operacao3"];
    $operacao3op = $G65["operacao3op"];
    $travessa = $G65["travessa"];
    $data = $G65["data"];
    $observacoes = $G65["observacoes"];
    $inspetor = $G65["inspetor"];
    


    date_default_timezone_set('America/Sao_Paulo');
    $emissao = date('d/m/Y H:i:s', time());

    $domPDF = new Dompdf();

    $html = '
        <!DOCTYPE html>
        <html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <style type="text/css">
        ol {
            margin: 0;
            padding: 0
        }

        table td,
        table th {
            padding: 0
        }

        .c21 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 95.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c27 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 91.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c33 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 83.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c20 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 327.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c26 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 185.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c14 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 73.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c38 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 87.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c31 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 72pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c11 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 86.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c36 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 82.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c41 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 451.4pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c13 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 225.7pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c39 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 66.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c29 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 203.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c37 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 200.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c35 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 83.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c43 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 72pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c18 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 54pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c10 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 144.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c42 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 95.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c25 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 150.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c9 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 198.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c5 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: middle;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 77.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c32 {
            border-right-style: solid;
            padding: 5pt 5pt 5pt 5pt;
            border-bottom-color: #000000;
            border-top-width: 1pt;
            border-right-width: 1pt;
            border-left-color: #000000;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-top-style: solid;
            border-left-style: solid;
            border-bottom-width: 1pt;
            width: 122.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c16 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 5pt;
            font-family: "Arial";
            font-style: normal
        }

        .c6 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 13pt;
            font-family: "Arial";
            font-style: normal
        }

        .c1 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Arial";
            font-style: normal
        }

        .c3 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c15 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Arial";
            font-style: normal
        }

        .c30 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Arial";
            font-style: normal
        }

        .c0 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left;
            height: 11pt
        }

        .c34 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Arial";
            font-style: normal
        }

        .c23 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c12 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center
        }

        .c7 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c22 {
            margin-left: auto;
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c28 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c2 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: center
        }

        .c24 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c8 {
            background-color: #ffffff;
            max-width: 451.4pt;
            padding: 49.6pt 72pt 72pt 72pt
        }

        .c4 {
            height: 11pt
        }

        .c40 {
            height: 21.6pt
        }

        .c19 {
            height: 0pt
        }

        .c17 {
            height: 21pt
        }

        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    </style>
</head>

<body class="c8">
    <p class="c12"><span class="c6">PLANILHA DE CONTROLE - MONTAGEM G.65</span></p>
    <p class="c12"><span class="c6">SUSPENS&Atilde;O ANTERIOR S 2007</span></p>
    <p class="c12"><span class="c6">VERIFICA&Ccedil;&Otilde;ES E CONTROLES</span></p>
    <p class="c7"><span
            class="c16">__________________________________________________________________________________________________________________________________________________________________<br></span>
    </p>
    <p class="c12"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS SUBGRUPOS RODA:</span></p>
    <p class="c12 c4"><span class="c23"></span></p>
    <p class="c12"><span class="c23">CONTROLE GRUPO RODA (ESQUERDO/DIREITO)</span></p><a
        id="t.0ec78094aa344106ef87e6aed03c355b36fffdc7"></a><a id="t.0"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso fixa&ccedil;&atilde;o reparo</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">7 - 10 nm</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque porca M33</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">384 - 454 nm</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Esmagamento colarinho M33 (esquerdo)</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$esmagamento_esq.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Esmagamento colarinho M33 (direito)</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$esmagamento_dir.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso cubo roda</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">250 - 295 nm</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Montagem da calota (esquerdo)</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$montagem_esq.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Montagem da calota (direito)</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$montagem_dir.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (esquerdo)</span>
                    </p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$oscilacao_esq.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (direito)</span>
                    </p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c1">'.$oscilacao_dir.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque porca dos bra&ccedil;os</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">117 - 209 nm</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso das pin&ccedil;as</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">140 -165 nm</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo piv&ocirc; </span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">W076</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo do bra&ccedil;o superior</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">GFM</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo do bra&ccedil;o inferior</span></p>
                </td>
                <td class="c13" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">SFG</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p><a id="t.dd1137c45afa4ed6565c269735cef514c9e098e1"></a><a id="t.1"></a>
    <table class="c24">
        <tbody>
            <tr class="c17">
                <td class="c41" colspan="3" rowspan="1">
                    <p class="c2"><span class="c1">Operadores</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c28 c4"><span class="c1">'.$operador.'</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c28 c4"><span class="c1">'.$operador2.'</span></p>
                </td>
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c28 c4"><span class="c1">'.$operador3.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c1"></span></p>
    <p class="c12 c4"><span class="c1"></span></p>
    <p class="c12 c4"><span class="c1"></span></p>
    <p class="c12 c4"><span class="c1"></span></p>
    <p class="c12 c4"><span class="c1"></span></p>
    <p class="c12 c4"><span class="c1"></span></p>
    <p class="c12"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS BRA&Ccedil;OS/SUPORTES/TIRANTES</span>
    </p><a id="t.f40da7b62bb4e1cde0b9d2940161805064a1ea7b"></a><a id="t.2"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c31" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Quantidade</span></p>
                </td>
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">N&ordm; do desenho</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca nos bra&ccedil;os sup/inf</span></p>
                </td>
                <td class="c31" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">AE112500.01</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">77.4 &divide; 94.6</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante</span></p>
                </td>
                <td class="c31" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">16980931</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">98 &divide; 137.2</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante / suporte
                            lateral</span></p>
                </td>
                <td class="c43" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c42" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17155931</span></p>
                </td>
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">98 &divide; 137.2</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a
        id="t.3"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c39" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 1:</span></p>
                </td>
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao1.'</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 2:</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao1op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12"><span class="c34">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA DIRE&Ccedil;&Atilde;O</span></p>
    <a id="t.2846320a84b18f9b9cb3c679eb108ec50b41ba04"></a><a id="t.4"></a>
    <table class="c22">
        <tbody>
            <tr class="c19">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Quantidade</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">N&ordm; do desenho</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c40">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o parafuso fixa&ccedil;&atilde;o da
                            dire&ccedil;&atilde;o hidr&aacute;ulica</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">4</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">16676834</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">50 &divide; 61</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o porcas fixa&ccedil;&atilde;o da barra de
                            tor&ccedil;&atilde;o</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">4</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">17038021</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">83 &divide; 93<br>186 &divide; 206</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o porca fixa&ccedil;&atilde;o piv&ocirc; de
                            dire&ccedil;&atilde;o hidr&aacute;ulica e bra&ccedil;os do fuso s</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">17155531</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">68 &divide; 83</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Converg&ecirc;ncia das rodas</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">*</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">*</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2 &divide; 4 (mm)</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o porca de registro converg&ecirc;ncia</span>
                    </p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">*</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">80 &divide; 115</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c3"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.5"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c39" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 1:</span></p>
                </td>
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao2.'</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 2:</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao2op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12 c4"><span class="c3"></span></p>
    <p class="c12"><span class="c34">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA BARRA DE
            TOR&Ccedil;&Atilde;O</span></p><a id="t.35e0ac4c31fd723876b07649dd5842e297fa8df0"></a><a id="t.6"></a>
    <table class="c22">
        <tbody>
            <tr class="c19">
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Quantidade</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">N&ordm; do desenho</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c23">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o da porca para parafuso dos
                            bra&ccedil;os/dist&acirc;ncia/buchas</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">17155731</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">206 &divide; 252</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o das porcas para parafuso dos tirantes
                            inferiores/superiores</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">4</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">17155731</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">192 &divide; 235</span></p>
                    <p class="c2"><span class="c3">150 &divide; 183 </span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o das porcas para parafuso da
                            travessa/amortecedores.</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">16984631</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">116 &divide; 142</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c9" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Calibra&ccedil;&atilde;o das porcas para parafuso dos amortecedores
                            dos bra&ccedil;os</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">2</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">16984631</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">116 &divide; 142</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c3"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.7"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c39" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 1:</span></p>
                </td>
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao3.'</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c2"><span class="c3">Visto 2:</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c3">'.$operacao3op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c15"></span></p><a id="t.88c8cc51af990676a44c126264d8e043f697803f"></a><a id="t.8"></a>
    <table class="c24">
        <tbody>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">C&oacute;digo da travessa</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$travessa.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Observa&ccedil;&otilde;es</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$observacoes.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Aprovado por</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$inspetor.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Data</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$data.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Etiqueta</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$etiqueta.'</span></p>
                </td>
            </tr>
            <tr class="c19">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">C&oacute;digo</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2 c4"><span class="c15">'.$codigo.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c15"></span></p>
    <p class="c0"><span class="c3"></span></p>
</body>

</html>
        ';


    $domPDF->loadHtml($html);

    $domPDF->setPaper('A4', 'portrait');

    $domPDF->render();

    $documentName = "G65_" . $etiqueta . ".pdf";

    $domPDF->stream($documentName);
}
