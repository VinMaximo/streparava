<?php include("../Template/header.php");

if (isset($_SESSION['montagem']) or isset($_SESSION['adm']) or isset($_SESSION['qualidade'])) {


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
            if (isset($_SESSION['montagem'])) {
            ?>
                <div class="card text-center">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Montagem</h4>
                        <p class="card-text"></p>
                        <div class="buttons">
                            <a href="../montagem35/listPDC.php" class="btn btn-primary">Lista planilha de controle G35-40</a>

                            <a href="../montagemG50/listPDC50.php" class="btn btn-primary">Lista planilha de controle G50</a>

                            <a href="../montagemG65/listPDC65.php" class="btn btn-primary">Lista planilha de controle G65</a>

                            <a href="../montagemG70/listPDC70.php" class="btn btn-primary">Lista planilha de controle G70</a>



                        </div>

                        <div class="buttons">
                            <br>

                            <a href="../travessa/listTravessa.php" class="btn btn-primary">Lista de travessas</a>

                            <a href="../final35/listFinal35.php" class="btn btn-primary">Levantamentos de produção G35-40</a>

                            <a href="../final50/listFinal50.php" class="btn btn-primary">Levantamentos de produção G50</a>

                            <a href="../final65/listFinal65.php" class="btn btn-primary">Levantamentos de produção G65</a>



                        </div>

                        <div class="buttons">
                            <br>

                            <a href="../final70/listFinal70.php" class="btn btn-primary">Levantamentos de produção G70</a>



                        </div>

                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>

                <br>
                <br>
                <div class="card text-center">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h3>ATENÇÃO</h3>
                        <br>
                        Em caso de alteração do código da gama, solicite um inspetor da qualidade que faça a alteração necessária.




                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION['adm'])) {
            ?>
                <div class="card text-center">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Admnistradores</h4>
                        <p class="card-text"></p>
                        <div class="buttons">

                            <a href="../qualidade/listInspetor.php" class="btn btn-primary">Lista de inspetores</a>

                            <a href="../usuario/listUser.php" class="btn btn-primary">Lista de usuários</a>

                            <a href="../operador/listOperador.php" class="btn btn-primary">Lista de operadores</a>

                            <a href="../relatorioDia/listRelatorio.php" class="btn btn-primary">Relatório diário</a>

                            <a href="../relatorioMes/listRelatorio.php" class="btn btn-primary">Relatório mensal</a>

                        </div>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            <?php
            }
            ?>




            <?php
            if (isset($_SESSION['qualidade'])) {
            ?>
                <div class="card text-center">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Qualidade</h4>
                        <p class="card-text"></p>
                        <div class="buttons">
                            <a href="../aprovacao35/aprovar35.php" class="btn btn-primary">Aprovação Gama 35</a>
                            <a href="../aprovacao50/aprovar50.php" class="btn btn-primary">Aprovação Gama 50</a>
                            <a href="../aprovacao65/aprovar65.php" class="btn btn-primary">Aprovação Gama 65</a>
                            <a href="../aprovacao70/aprovar70.php" class="btn btn-primary">Aprovação Gama 70</a>




                            <div class="buttons">
                                <br>

                            <a href="../codigo/altera35.php" class="btn btn-primary">Aterar código da gama 35</a>

                            <a href="../codigo/altera50.php" class="btn btn-primary">Aterar código da gama 50</a>

                            <a href="../codigo/altera65.php" class="btn btn-primary">Aterar código da gama 65</a>

                            <a href="../codigo/altera70.php" class="btn btn-primary">Aterar código da gama 70</a>



                            </div>

                            <div class="buttons">
                                <br>

                            <a href="../refret/listRefret.php" class="btn btn-primary">Levantamento diário de refugo</a>

                            



                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            <?php
            }
            ?>



            <br>


        </div>

        <br>

        <br>



    </body>

    </html>

<?php
} else {



?>
    <script>
        window.location = "../auth/index.php";
    </script>

<?php
}
