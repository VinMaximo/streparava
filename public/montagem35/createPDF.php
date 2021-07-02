<?php
    include_once("../../data/connection.php");

    require_once 'domPDF/vendor/autoload.php';

    use Dompdf\Dompdf;

    if(isset($_GET["etiqueta"]))
    {
        $etiqueta = $_GET["etiqueta"];
        $sqlG35 = "SELECT * FROM g35 WHERE etiqueta = " . $etiqueta;
        $resultado = $connection->query($sqlG35);
        $G35 = $resultado->fetch_assoc();
        $codigo = $G35["codigo"];
        $operador = $G35["operador"];
        $operador2 = $G35["operador2"];
        $operador3 = $G35["operador3"];
        $esmagamento_dir = $G35["esmagamento_dir"];
        $montagem_dir = $G35["montagem_dir"];
        $esmagamento_esq = $G35["esmagamento_esq"];
        $montagem_esq = $G35["montagem_esq"];
        $oscilacao_esq = $G35["oscilacao_esq"];
        $oscilacao_dir = $G35["montagem_dir"];
        $operacao1 = $G35["operacao1"];
        $operacao1op = $G35["operacao1op"];
        $operacao2 = $G35["operacao2"];
        $operacao2op = $G35["operacao2op"];
        $operacao3 = $G35["operacao3"];
        $operacao3op = $G35["operacao3op"];
        $travessa = $G35["travessa"];
        $data = $G35["data"];
        $observacoes = $G35["observacoes"];
        $inspetor = $G35["inspetor"];

       
        
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d/m/Y H:i:s', time());  
    
        $domPDF = new Dompdf();

        $html = '
        <!DOCTYPE html>
        <html lang="pt-br">
            <head>
            <title>Prontuário</title>
                <meta content="text/html; charset=utf8mb4_general_ci" http-equiv="content-type">
                <style>
                    ol{
                        margin:0;padding:0
                    }
        
                    table td,table th{
                        padding:0
                    }
                    .c17{
                        border-right-style:solid;
                        padding:1pt 1pt 1pt 1pt;
                        border-bottom-color:#000000;
                        border-top-width:1pt;
                        border-right-width:1pt;
                        border-left-color:#000000;
                        vertical-align:top;
                        border-right-color:#000000;
                        border-left-width:1pt;
                        border-top-style:solid;
                        border-left-style:solid;
                        border-bottom-width:1pt;
                        width:136.5pt;
                        border-top-color:#000000;
                        border-bottom-style:solid
                    }
        
                    .c12{
                        border-right-style:solid;
                        padding:5pt 5pt 5pt 5pt;
                        border-bottom-color:#000000;
                        border-top-width:1pt;
                        border-right-width:1pt;
                        border-left-color:#000000;
                        vertical-align:top;
                        border-right-color:#000000;
                        border-left-width:1pt;
                        border-top-style:solid;
                        border-left-style:solid;
                        border-bottom-width:1pt;
                        width:451.4pt;
                        border-top-color:#000000;
                        border-bottom-style:solid
                    }
        
                    .c0{
                        color:#000000;
                        font-weight:400;
                        text-decoration:none;
                        vertical-align:baseline;
                        font-size:14pt;
                        font-family:"Arial";
                        font-style:normal
                    }
        
                    .c5{
                        color:#000000;
                        text-decoration:none;
                        vertical-align:baseline;
                        font-size:14pt;
                        font-family:"Arial";
                        font-style:normal
                    }
                    
                    .c8{
                        color:#000000;
                        text-decoration:none;
                        vertical-align:baseline;
                        font-size:18pt;
                        font-family:"Arial";
                        font-style:normal
                    }
                    
                    .c1{
                        padding-top:0pt;
                        padding-bottom:0pt;
                        line-height:1.15;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    .c4{
                        color:#000000;
                        text-decoration:none;
                        vertical-align:baseline;
                        font-size:17pt;
                        font-family:"Arial";
                        font-style:normal
                    }
                    
                    .c10{
                        padding-top:0pt;
                        padding-bottom:0pt;
                        line-height:1.15;
                        orphans:2;
                        widows:2;
                        text-align:right
                    }
                    
                    .c14{
                        padding-top:0pt;
                        padding-bottom:0pt;
                        line-height:1.15;
                        orphans:2;
                        widows:2;
                        text-align:center
                    }
                    
                    .c11{
                        border-spacing:0;
                        border-collapse:collapse;
                        margin-right:auto
                    }
                    .c6{
                        padding-top:0pt;
                        padding-bottom:0pt;
                        line-height:1.0;
                        text-align:left
                    }
                    
                    .c3{
                        background-color:#ffffff;
                        max-width:451.4pt;
                        padding:72pt 72pt 72pt 72pt
                    }
                    
                    .c15{
                        background-color:#ffffff;
                        font-size:10.5pt
                    }
                    
                    .c18{
                        font-size:7pt
                    }
                    
                    .c16{
                        height:83.9pt
                    }
                    
                    .c2{
                        font-weight:700
                    }
                    
                    .c7{
                        height:11pt
                    }
                    
                    .c9{
                        height:74.1pt
                    }
                    
                    .c13{
                        height:0pt
                    }
                    
                    .title{
                        padding-top:0pt;
                        color:#000000;
                        font-size:26pt;
                        padding-bottom:3pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    .subtitle{
                        padding-top:0pt;
                        color:#666666;
                        font-size:15pt;
                        padding-bottom:16pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    li{
                        color:#000000;
                        font-size:11pt;
                        font-family:"Arial"
                    }
                    
                    p{
                        margin:0;color:#000000;
                        font-size:11pt;
                        font-family:"Arial"
                    }
                    
                    h1{
                        padding-top:20pt;
                        color:#000000;
                        font-size:20pt;
                        padding-bottom:6pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    h2{
                        padding-top:18pt;
                        color:#000000;
                        font-size:16pt;
                        padding-bottom:6pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    h3{
                        padding-top:16pt;
                        color:#434343;
                        font-size:14pt;
                        padding-bottom:4pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    h4{
                        padding-top:14pt;
                        color:#666666;
                        font-size:12pt;
                        padding-bottom:4pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    h5{
                        padding-top:12pt;
                        color:#666666;
                        font-size:11pt;
                        padding-bottom:4pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                    
                    h6{
                        padding-top:12pt;
                        color:#666666;
                        font-size:11pt;
                        padding-bottom:4pt;
                        font-family:"Arial";
                        line-height:1.15;
                        page-break-after:avoid;
                        font-style:italic;
                        orphans:2;
                        widows:2;
                        text-align:left
                    }
                </style>
            </head>
    
            <body class="c3">
                <p class="c14">
                    <span class="c4 c2">Planilha G35</span>
                </p>

                <table class="c12">

                
                    <tr>
                        <h3> Controle roda (esquerdo/direito)</h3>


                    </tr>


                    <tr>
                        <td>Torque parafuso fixação reparo</td>
                        <td>7 - 10 nm</td>
                    </tr>

                    <tr>
                        <td>Torque porca M33</td>
                        <td>384 - 454 nm</td>
                    </tr>

                    <tr>
                        <td>Torque parafuso cubo roda (G35/G40/G50) </td>
                        <td>109 - 128 nm</td>
                    </tr>

                    <tr>
                        <td>Torque parafuso cubo roda (G65/70) </td>
                        <td>250 - 295 nm</td>
                    </tr>

                    <tr>
                        <td>Oscilação disco de freio</td>
                        <td>Max 0,11nm</td>
                    </tr>

                    <tr>
                        <td>Torque porca dos braços</td>
                        <td>117 - 209 nm</td>
                    </tr>

                    <tr>
                        <td>Torque parafuso das pinças (G35/G40/G50)</td>
                        <td>217 - 256 nm</td>
                    </tr>

                    <tr>
                        <td>Torque parafuso das pinças (G65/G70)</td>
                        <td>140 - 165 nm</td>
                    </tr>

                    <tr>
                        <td>Código pivô</td>
                        <td>W076</td>
                    </tr>

                    <tr>
                        <td>Código do braço superior</td>
                        <td>GFM</td>
                    </tr>

                    <tr>
                        <td>Código braço inferior</td>
                        <td>SFG</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                    </tr>





                </p>

            </table>
                
                <p class="c14">
                    <span class="c2 c8">Prontu&aacute;rio M&eacute;dico - '. $data .'</span>
                </p>
                
                <p class="c14 c7">
                    <span class="c2 c4"></span>
                </p>
                
                <p class="c10">
                    <span class="c18">Esse prontu&aacute;rio foi gerado automaticamente pelo Sistema &Uacute;nico.</span>
                </p>
                
                <hr>
                <br>
                <p class="c1">
                    <span class="c5 c2">M&eacute;dico Respons&aacute;vel</span>
                </p>
                
                <a id="t.2f307608e43e26ce0006aba0eeec6bf8145a9ee4"></a>
                <a id="t.0"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c13">
                            <td class="" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0"></span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                
                <p class="c1 c7">
                    <span class="c0"></span>
                </p>
                <br>
                <p class="c1">
                    <span class="c2">CRM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="c0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </p>
                
                <a id="t.5fab49f8414fc78ba3562cf9e75f108ab9a25f9c"></a>
                <a id="t.1"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c13">
                            <td class="c17" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0"></span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="c1 c7">
                    <span class="c0"></span>
                </p>
                <br>
                <hr>
                <br>
                <p class="c1">
                    <span class="c2 c5">Paciente</span>
                </p>
                
                <a id="t.5fecfd52dbde5927a1db5bc5c84ffa31222ffba0"></a>
                <a id="t.2"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c13">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0"></span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="c1 c7">
                    <span class="c0"></span>
                </p>
                <br>
                
                <p class="c1">
                    <span class="c2 c5">CPF</span>
                    <span class="c0">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="c2 c5">Contato</span>
                    <span class="c0">: </span>
                </p>
                <br>
                
                <p class="c1">
                    <span class="c5 c2">Endere&ccedil;o</span>
                </p>
                
                <a id="t.0bfa3a26745407dd70ac7ec98396d93d400926ba"></a>
                
                <a id="t.3"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c13">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0"></span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p class="c1 c7">
                    <span class="c0"></span>
                </p>
                <br>
                <p class="c1">
                    <span class="c2 c5">Bairro</span>
                    <span class="c0">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="c2 c5">N&uacute;mero</span>
                    <span class="c0">: </span>
                </p>
                <p class="c1 c7">
                    <span class="c0"></span>
                </p>
                <hr>
                <br>
                <p class="c1">
                    <span class="c5 c2">Problema</span>
                </p>
                
                <a id="t.8f84220c589c48910fa40b767fc59ccf90991be7"></a>
                <a id="t.4"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c9">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0"></span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="c1 c7">
                <span class="c0"></span>
                </p>
                <br>
                <br>
                <br>
                <br>
                
                <p class="c1">
                    <span class="c2 c5">Situa&ccedil;&atilde;o</span>
                    <span class="c0">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="c2 c5">An&aacute;lise</span>
                    <span class="c0">: </span>
                </p>
                <br>
                
                <p class="c1">
                    <span class="c5 c2">Observa&ccedil;&otilde;es</span>
                </p>
                
                <a id="t.89b45d81e703c02dff14d42c1972a7a4a82da465"></a>
                
                <a id="t.5"></a>
                <table class="c11">
                    <tbody>
                        <tr class="c16">
                            <td class="c12" colspan="1" rowspan="1">
                                <p class="c6">
                                    <span class="c0">'.$etiqueta.'</span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <p class="c14">
                    <span>Copyright </span>
                    <span class="c2 c15">&copy; Sistema &Uacute;nico</span>
                </p>
            </body>
        </html>
        ';


        $domPDF->loadHtml($html);

        $domPDF->setPaper('A4', 'portrait');

        $domPDF->render();

        $documentName = "Prontuario_" . $etiqueta . ".pdf";

        $domPDF->stream($documentName);
    }
?>