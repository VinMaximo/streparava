<?php include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaMontagem.php");

$dbcon = new mysqli($servername, $username, $password, $dbname);

$sql = $dbcon->query("SELECT coalesce( max( etiqueta ), 0) + 1 FROM g35");

$row = $sql->fetch_row();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir número inicial da gama</title>
</head>

<body>
    <br>
    <br>


    <div class="form">
        <form action="insertEtiqueta65.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastrar um novo número de etiqueta</h3>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta atual</span>
                </div>
                <input type="number" name="numEtiqueta" class="form-control" id="numEtiqueta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row[0]; ?>" readonly>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número inicial etiqueta</span>
                </div>
                <input type="number" name="numEtiq" placeholder="Insira o numero que partirá a contagem de eixos" class="form-control" id="numEtiq" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="card text-center">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <h5 class="card-title">OBSERVAÇÕES!!!</h5>
                    <p class="card-text"></p>
                    1º A partir do momento em que uma etiqueta for alterada, NÃO será possível inserir números anteriores ao novo inserido. <br> <br>

                    2º O primeiro número de etiqueta após a alteração não será exibido corretamente na hora da criação de uma nova planilha de controle, a partir da segunda será exibido normalmente. <br> <br>

                    3º Essa função deverá ser usada SOMENTE na virada de ano quando houver troca de código <br>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>






            <div class="buttons">

                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../montagem/listPDC.php'" value="Cancelar">

            </div>




        </form>
    </div>


</body>

</html>