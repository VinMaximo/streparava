<?php

include("../Template/header.php");

?>

<html lang="pt-BR">

<head>
    <title>Home - SCAL </title>
</head>

<body>
    <br>
    <br>

    <div class="container">

        <div class="row">


        </div>

        <?php
        if (isset($_SESSION['adm'])) {
        ?>
            <div class="card text-center">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Gamas</h5>
                    <p class="card-text"></p>
                    <div class="buttons">
                        <a href="../montagem35/listPDC.php" class="btn btn-primary">Lista planilha de controle G35-40</a>

                        <a href="../montagemG50/listPDC50.php" class="btn btn-primary">Lista planilha de controle G50</a>

                        <a href="../montagemG65/listPDC65.php" class="btn btn-primary">Lista planilha de controle G65</a>

                        <a href="../montagemG70/listPDC70.php" class="btn btn-primary">Lista planilha de controle G70</a>


                    </div>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Outros</h5>
                    <p class="card-text"></p>
                    <div class="buttons">
                        <a href="../operador/listOperador.php" class="btn btn-primary">Lista de operadores</a>
                        <a href="../qualidade/listInspetor.php" class="btn btn-primary">Lista de inspetores</a>


                    </div>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Qualidade</h5>
                    <p class="card-text"></p>
                    <div class="buttons">
                        <a href="../aprovacao35/aprovar35.php" class="btn btn-primary">Aprovação Gama 35</a>
                        <a href="../aprovacao50/aprovar50.php" class="btn btn-primary">Aprovação Gama 50</a>
                        <a href="../aprovacao65/aprovar65.php" class="btn btn-primary">Aprovação Gama 65</a>


                    </div>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>
        <?php
        }
        ?>


        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Gamas</h5>
                <p class="card-text"></p>
                <div class="buttons">
                    <a href="../montagem35/listPDC.php" class="btn btn-primary">Lista planilha de controle G35-40</a>

                    <a href="../montagemG50/listPDC50.php" class="btn btn-primary">Lista planilha de controle G50</a>

                    <a href="../montagemG65/listPDC65.php" class="btn btn-primary">Lista planilha de controle G65</a>

                    <a href="../montagemG70/listPDC70.php" class="btn btn-primary">Lista planilha de controle G70</a>


                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Outros</h5>
                <p class="card-text"></p>
                <div class="buttons">
                    <a href="../operador/listOperador.php" class="btn btn-primary">Lista de operadores</a>
                    <a href="../qualidade/listInspetor.php" class="btn btn-primary">Lista de inspetores</a>


                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title">Qualidade</h5>
                <p class="card-text"></p>
                <div class="buttons">
                    <a href="../aprovacao35/aprovar35.php" class="btn btn-primary">Aprovação Gama 35</a>
                    <a href="../aprovacao50/aprovar50.php" class="btn btn-primary">Aprovação Gama 50</a>
                    <a href="../aprovacao65/aprovar65.php" class="btn btn-primary">Aprovação Gama 65</a>


                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

        <br>


    </div>

    <br>

    <br>



</body>

</html>

<?php
include("../Template/footer.php");
?>