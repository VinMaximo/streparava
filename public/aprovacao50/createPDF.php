<?php
include_once("../../data/connection.php");


require_once 'domPDF/vendor/autoload.php';

use Dompdf\Dompdf;

if (isset($_GET["etiqueta"])) {
    $etiqueta = $_GET["etiqueta"];
    $sqlG50 = "SELECT * FROM G50 WHERE etiqueta = " . $etiqueta;
    $resultado = $connection->query($sqlG50);
    $G50 = $resultado->fetch_assoc();
    $codigo = $G50["codigo"];
    $operador = $G50["operador"];
    $operador2 = $G50["operador2"];
    $operador3 = $G50["operador3"];
    $esmagamento_dir = $G50["esmagamento_dir"];
    $montagem_dir = $G50["montagem_dir"];
    $esmagamento_esq = $G50["esmagamento_esq"];
    $montagem_esq = $G50["montagem_esq"];
    $oscilacao_esq = $G50["oscilacao_esq"];
    $oscilacao_dir = $G50["oscilacao_dir"];
    $operacao1 = $G50["operacao1"];
    $operacao1op = $G50["operacao1op"];
    $operacao2 = $G50["operacao2"];
    $operacao2op = $G50["operacao2op"];
    $operacao3 = $G50["operacao3"];
    $operacao3op = $G50["operacao3op"];
    $travessa = $G50["travessa"];
    $data = $G50["data"];
    $observacoes = $G50["observacoes"];
    $inspetor = $G50["inspetor"];
    


    date_default_timezone_set('America/Sao_Paulo');
    $emissao = date('d/m/Y H:i:s', time());

    $domPDF = new Dompdf();

    $html = '
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

        .c33 {
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

        .c23 {
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
            width: 203.2pt;
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
            width: 73.5pt;
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

        .c5 {
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

        .c32 {
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

        .c29 {
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
            width: 82.5pt;
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
            width: 451.4pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c3 {
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
            width: 72pt;
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
            width: 77.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c40 {
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

        .c11 {
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

        .c34 {
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
            width: 122.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c24 {
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
            width: 327.8pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c15 {
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

        .c30 {
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
            width: 83.2pt;
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
            width: 86.2pt;
            border-top-color: #000000;
            border-bottom-style: solid
        }

        .c0 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c10 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Arial";
            font-style: normal
        }

        .c28 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Arial";
            font-style: normal
        }

        .c43 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 5pt;
            font-family: "Arial";
            font-style: normal
        }

        .c2 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left;
            height: 11pt
        }

        .c8 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 11pt;
            font-family: "Arial";
            font-style: normal
        }

        .c9 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Arial";
            font-style: normal
        }

        .c1 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center;
            height: 11pt
        }

        .c25 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 10pt;
            font-family: "Arial";
            font-style: normal
        }

        .c17 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 13pt;
            font-family: "Arial";
            font-style: normal
        }

        .c16 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: center
        }

        .c37 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c31 {
            margin-left: auto;
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c22 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c35 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c4 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: center
        }

        .c41 {
            background-color: #ffffff;
            max-width: 451.4pt;
            padding: 49.6pt 72pt 72pt 72pt
        }

        .c13 {
            height: 0pt
        }

        .c44 {
            height: 21.6pt
        }

        .c6 {
            height: 11pt
        }

        .c39 {
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

<body class="c41">
    <p class="c16"><span class="c17">PLANILHA DE CONTROLE - MONTAGEM G.50</span></p>
    <p class="c16"><span class="c17">SUSPENS&Atilde;O ANTERIOR S 2007</span></p>
    <p class="c16"><span class="c17">VERIFICA&Ccedil;&Otilde;ES E CONTROLES</span></p>
    <p class="c37"><span
            class="c43">__________________________________________________________________________________________________________________________________________________________________<br></span>
    </p>
    <p class="c16"><span class="c8">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS SUBGRUPOS RODA:</span></p>
    <p class="c1"><span class="c8"></span></p>
    <p class="c16"><span class="c8">CONTROLE GRUPO RODA (ESQUERDO/DIREITO)</span></p><a
        id="t.a3351bdab0f315c4d235671b6a031e0319d6ba1c"></a><a id="t.0"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Torque parafuso fixa&ccedil;&atilde;o reparo</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">7 - 10 nm</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Torque porca M33</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">384 - 454 nm</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Esmagamento colarinho M33 (esquerdo)</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9">'.$esmagamento_esq.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Esmagamento colarinho M33 (direito)</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9">'.$esmagamento_dir.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Torque parafuso cubo roda</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">109 - 128 nm</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Montagem da calota (esquerdo)</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9">'.$montagem_esq.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Montagem da calota (direito)</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9">'.$montagem_dir.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (esquerdo)</span>
                    </p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9"></span>'.$oscilacao_esq.'</p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Oscila&ccedil;&atilde;o disco de freio max 0,11 nm (direito)</span>
                    </p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c9"></span>'.$oscilacao_dir.'</p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Torque porca dos bra&ccedil;os</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">117 - 209 nm</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Torque parafuso das pin&ccedil;as</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">217 - 256 nm</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">C&oacute;digo piv&ocirc; </span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">W076</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">C&oacute;digo do bra&ccedil;o superior</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">GFM</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">C&oacute;digo do bra&ccedil;o inferior</span></p>
                </td>
                <td class="c3" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">SFG</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p>
    <p class="c2"><span class="c9"></span></p><a id="t.dd1137c45afa4ed6565c269735cef514c9e098e1"></a><a id="t.1"></a>
    <table class="c35">
        <tbody>
            <tr class="c39">
                <td class="c20" colspan="3" rowspan="1">
                    <p class="c4"><span class="c9">Operadores (matrícula)</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c22 c6"><span class="c9">'.$operador.'</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c22 c6"><span class="c9">'.$operador2.'</span></p>
                </td>
                <td class="c5" colspan="1" rowspan="1">
                    <p class="c22 c6"><span class="c9">'.$operador3.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c9"></span></p>
    <p class="c1"><span class="c9"></span></p>
    <p class="c1"><span class="c9"></span></p>
    <p class="c1"><span class="c9"></span></p>
    <p class="c1"><span class="c9"></span></p>
    <p class="c1"><span class="c9"></span></p>
    <p class="c16"><span class="c8">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE OS BRA&Ccedil;OS/SUPORTES/TIRANTES</span>
    </p><a id="t.f40da7b62bb4e1cde0b9d2940161805064a1ea7b"></a><a id="t.2"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c4"><span class="c25">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c30" colspan="1" rowspan="1">
                    <p class="c4"><span class="c25">Quantidade</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c4"><span class="c25">N&ordm; do desenho</span></p>
                </td>
                <td class="c24" colspan="1" rowspan="1">
                    <p class="c4"><span class="c25">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Calibra&ccedil;&atilde;o porca nos bra&ccedil;os sup/inf</span></p>
                </td>
                <td class="c30" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">4</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">AE112500.01</span></p>
                </td>
                <td class="c24" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">77.4 &divide; 94.6</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante</span></p>
                </td>
                <td class="c30" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">4</span></p>
                </td>
                <td class="c11" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">16980931</span></p>
                </td>
                <td class="c24" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">98 &divide; 137.2</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c33" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">Calibra&ccedil;&atilde;o porca piv&ocirc; do tirante / suporte
                            lateral</span></p>
                </td>
                <td class="c27" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">4</span></p>
                </td>
                <td class="c34" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">17155931</span></p>
                </td>
                <td class="c42" colspan="1" rowspan="1">
                    <p class="c4"><span class="c9">98 &divide; 137.2</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.3"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c23" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 1:</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao1.'</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 2:</span></p>
                </td>
                <td class="c40" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao1op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c16"><span class="c28">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA DIRE&Ccedil;&Atilde;O</span></p>
    <a id="t.3e61ad935e4e82033df193ac8dce98a8f6dd1c07"></a><a id="t.4"></a>
    <table class="c31">
        <tbody>
            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Quantidade</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">N&ordm; do desenho</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c44">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o parafuso fixa&ccedil;&atilde;o da
                            dire&ccedil;&atilde;o hidr&aacute;ulica</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">4</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">16676834</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">50 &divide; 61</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o porcas fixa&ccedil;&atilde;o da barra de
                            tor&ccedil;&atilde;o</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">17039021</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">83 &divide; 93<br></span></p>
                </td>
            </tr>

            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Travamento do grampo da barra de
                            tor&ccedil;&atilde;o</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">16858601</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">*<br></span></p>
                </td>
            </tr>


            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o porca fixa&ccedil;&atilde;o piv&ocirc; de
                            dire&ccedil;&atilde;o hidr&aacute;ulica e bra&ccedil;os do fuso s</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">17155531</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">68 &divide; 83</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Converg&ecirc;ncia das rodas</span></p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">*</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">*</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">1 &divide; 2 (mm)</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c7" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o porca de registro converg&ecirc;ncia</span>
                    </p>
                </td>
                <td class="c14" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c15" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">99477984</span></p>
                </td>
                <td class="c36" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">75 &divide; 98</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c0"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.5"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c23" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 1:</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao2.'</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 2:</span></p>
                </td>
                <td class="c40" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao2op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c1"><span class="c0"></span></p>
    <p class="c16"><span class="c28">OPERA&Ccedil;&Otilde;ES EFETUADAS SOBRE O LADO DA BARRA DE
            TOR&Ccedil;&Atilde;O</span></p><a id="t.c0e3b6f832e7aa34dbcb3c8bf2e9031184463bd5"></a><a id="t.6"></a>
    <table class="c31">
        <tbody>
            <tr class="c13">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Descri&ccedil;&otilde;es das opera&ccedil;&otilde;es</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Quantidade</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">N&ordm; do desenho</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c4"><span class="c8">Aperto (nm)</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o da porca para parafuso dos
                            bra&ccedil;os/dist&acirc;ncia/buchas</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">17155731</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">206 &divide; 252</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o das porcas para parafuso dos tirantes
                            superiores/inferiores</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">4</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">17155731</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">150 &divide; 183</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o das porcas para parafuso da
                            travessa/amortecedores.</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">16984631</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">116 &divide; 142</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c32" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Calibra&ccedil;&atilde;o das porcas para parafuso dos
                            amortecedores/bra&ccedil;os</span></p>
                </td>
                <td class="c38" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">2</span></p>
                </td>
                <td class="c12" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">16984631</span></p>
                </td>
                <td class="c19" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">116 &divide; 142</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c0"></span></p><a id="t.346d8ea1c0a6c8b1f5ba4599793b6460b3f9b32e"></a><a id="t.7"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c23" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 1:</span></p>
                </td>
                <td class="c18" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao3.'</span></p>
                </td>
                <td class="c29" colspan="1" rowspan="1">
                    <p class="c4"><span class="c0">Visto 2:</span></p>
                </td>
                <td class="c40" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c0">'.$operacao3op.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c10"></span></p><a id="t.1203076ad78f71947dd75befb490f59785878d8e"></a><a id="t.8"></a>
    <table class="c35">
        <tbody>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">C&oacute;digo da travessa</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10">'.$travessa.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">Observa&ccedil;&otilde;es</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10"'.$observacoes.'></span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">Aprovado por</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10">'.$inspetor.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">Data</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10">'.$data.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">Etiqueta</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10">'.$etiqueta.'</span></p>
                </td>
            </tr>
            <tr class="c13">
                <td class="c21" colspan="1" rowspan="1">
                    <p class="c4"><span class="c10">Código</span></p>
                </td>
                <td class="c26" colspan="1" rowspan="1">
                    <p class="c4 c6"><span class="c10">'.$codigo.'</span></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c10"></span></p>
    <p class="c2"><span class="c0"></span></p>
</body>

</html>
        ';


    $domPDF->loadHtml($html);

    $domPDF->setPaper('A4', 'portrait');

    $domPDF->render();

    $documentName = "G50_" . $etiqueta . ".pdf";

    $domPDF->stream($documentName);
}
