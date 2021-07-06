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

        .c7 {
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

        .c12 {
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
            width: 72pt;
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
            width: 73.5pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c8 {
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

        .c17 {
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

        .c14 {
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

        .c19 {
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

        .c6 {
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
            width: 54pt;
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
            width: 66.8pt;
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

        .c28 {
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

        .c20 {
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
            width: 95.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c22 {
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
            width: 83.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c34 {
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

        .c18 {
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

        .c4 {
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
            width: 87.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
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

        .c16 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left;
            height: 11pt
        }

        .c1 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c30 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c31 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 14pt;
            font-family: "Arial";
            font-style: normal
        }

        .c32 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 5pt;
            font-family: "Arial";
            font-style: normal
        }

        .c0 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center;
            height: 11pt
        }

        .c23 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Arial";
            font-style: normal
        }

        .c13 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center
        }

        .c38 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c5 {
            margin-left: auto;
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c24 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c2 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: center
        }

        .c9 {
            background-color: #ffffff;
            max-width: 451.4pt;
            padding: 49.6pt 72pt 72pt 72pt
        }

        .c26 {
            height: 11pt
        }

        .c3 {
            height: 0pt
        }

        .c21 {
            height: 21.6pt
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

<body class="c9">
    <p class="c13"><span class="c31">PLANILHA DE CONTROLE - MONTAGEM G.35-40</span></p>
    <p class="c13"><span class="c31">SUSPENS&Atilde;O ANTERIOR S 2007</span></p>
    <p class="c13"><span class="c31">VERIFICA&Ccedil;&Otilde;ES E CONTROLES</span></p>
    <p class="c38"><span
            class="c32">__________________________________________________________________________________________________________________________________________________________________</span>
    </p>
    <p class="c16"><span class="c32"></span></p>
    <p class="c13"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS SUBGRUPOS RODA:</span></p>
    <p class="c0"><span class="c23"></span></p>
    <p class="c13"><span class="c23">CONTROLE GRUPO RODA (ESQUERDO/DIREITO)</span></p><a
        id="t.5e463814a375a8e994f0b142ec9cb44d230c4c84"></a><a id="t.0"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso fixa&ccedil;&atilde;o reparo</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">7 - 10 nm</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque porca M33</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">384 - 454 nm</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Esmagamento colarinho M33 (esquerdo)</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1"> '.$esmagamento_esq.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Esmagamento colarinho M33 (direito)</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1"> '.$esmagamento_dir.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso cubo roda</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">409 - 128 nm</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Montagem da calota (esquerdo)</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$montagem_esq.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Montagem da calota (direito)</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$montagem_dir.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (esquerdo)</span>
                    </p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$oscilacao_esq.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (direito)</span>
                    </p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$oscilacao_dir.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque porca dos bra&ccedil;os</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">117 - 209 nm</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Torque parafuso das pin&ccedil;as</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">217 - 256 nm</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo piv&ocirc; </span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">W076</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo do bra&ccedil;o superior</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">GFM</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c4" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">C&oacute;digo do bra&ccedil;o inferior</span></p>
                </td>
                <td class="c4" colspan="1" rowspan="1">
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
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    
 
    
    <p class="c13"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS BRA&Ccedil;OS/SUPORTES/TIRANTES</span>
    </p><a id="t.f40da7b62bb4e1cde0b9d2940161805064a1ea7b"></a><a id="t.1"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c22" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Quantidade</span></p>
                </td>
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">N&ordm; do desenho</span></p>
                </td>
                <td class="c8" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca nos bra&ccedil;os sup/inf</span></p>
                </td>
                <td class="c22" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">AE112500.01</span></p>
                </td>
                <td class="c8" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">77.4 &divide; 94.6</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante</span></p>
                </td>
                <td class="c22" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c37" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">16980931</span></p>
                </td>
                <td class="c8" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">98 &divide; 137.2</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante / suporte
                            lateral</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17155931</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">98 &divide; 137.2</span></p>
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
   

    <p class="c0"><span class="c1"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.2"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 1:</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao1.'</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 2:</span></p>
                </td>
                <td class="c28" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao1op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    
   
    
    <p class="c13"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA DIRE&Ccedil;&Atilde;O</span></p>
    <a id="t.6ac85b32ad1af5af0954ce00c5b75119be602eb9"></a><a id="t.3"></a>
    <table class="c5">
        <tbody>
            <tr class="c3">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Quantidade</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">N&ordm; do desenho</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c21">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o parafuso fixa&ccedil;&atilde;o da
                            dire&ccedil;&atilde;o hidr&aacute;ulica</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">16676834</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">50 &divide; 61</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porcas fixa&ccedil;&atilde;o da barra de
                            tor&ccedil;&atilde;o</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17039021</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">83 &divide; 93<br>186&divide; 203</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca fixa&ccedil;&atilde;o piv&ocirc; de
                            dire&ccedil;&atilde;o hidr&aacute;ulica e bra&ccedil;os do fuso s</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">2</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17155531</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">68 &divide; 83</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Converg&ecirc;ncia das rodas</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">*</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">*</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">1 &divide; 2 (mm)</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o porca de registro converg&ecirc;ncia</span>
                    </p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">2</span></p>
                </td>
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">99477984</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">75 &divide; 98</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    
   
    <p class="c0"><span class="c1"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.4"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 1:</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao2.'</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 2:</span></p>
                </td>
                <td class="c28" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao2op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>
    <p class="c0"><span class="c1"></span></p>

    <p class="c13"><span class="c23">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA BARRA DE
            TOR&Ccedil;&Atilde;O</span></p><a id="t.c0e3b6f832e7aa34dbcb3c8bf2e9031184463bd5"></a><a id="t.5"></a>
    <table class="c5">
        <tbody>
            <tr class="c3">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Quantidade</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">N&ordm; do desenho</span></p>
                </td>
                <td class="c6" colspan="1" rowspan="1">
                    <p class="c2"><span class="c30">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o da porca para parafuso dos
                            bra&ccedil;os/dist&acirc;ncia/buchas</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">2</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17155731</span></p>
                </td>
                <td class="c6" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">206 &divide; 252</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o das porcas para parafuso dos tirantes
                            superiores/inferiores</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">4</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">17155731</span></p>
                </td>
                <td class="c6" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">150 &divide; 183</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o das porcas para parafuso da
                            travessa/amortecedores.</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">2</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">16984631</span></p>
                </td>
                <td class="c6" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">116 &divide; 142</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c10" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Calibra&ccedil;&atilde;o das porcas para parafuso dos
                            amortecedores/bra&ccedil;os</span></p>
                </td>
                <td class="c20" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">2</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">16984631</span></p>
                </td>
                <td class="c6" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">116 &divide; 142</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p class="c0"><span class="c1"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.6"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c25" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 1:</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao3.'</span></p>
                </td>
                <td class="c35" colspan="1" rowspan="1">
                    <p class="c2"><span class="c1">Visto 2:</span></p>
                </td>
                <td class="c28" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c1">'.$operacao3op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    
    
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c15"></span></p><a id="t.1203076ad78f71947dd75befb490f59785878d8e"></a><a id="t.7"></a>
    <table class="c24">
        <tbody>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">C&oacute;digo da travessa</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$travessa.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Observa&ccedil;&otilde;es</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$observacoes.'</span></p>
                    <p class="c2 c26"><span class="c15"></span></p>
                    <p class="c2 c26"><span class="c15"></span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Aprovado por</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$inspetor.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Data</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$data.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Etiqueta</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$etiqueta.'</span></p>
                </td>
            </tr>
            <tr class="c3">
                <td class="c17" colspan="1" rowspan="1">
                    <p class="c2"><span class="c15">Código</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c2 c26"><span class="c15">'.$codigo.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c15"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c1"></span></p>
    <p class="c16"><span class="c1"></span></p>
    
    
    
</body>

</html>
        ';


    $domPDF->loadHtml($html);

    $domPDF->setPaper('A4', 'portrait');

    $domPDF->render();

    $documentName = "Prontuario_" . $etiqueta . ".pdf";

    $domPDF->stream($documentName);
}
