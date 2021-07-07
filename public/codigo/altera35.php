<?php include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaQualidade.php");

$dbcon = new mysqli($servername, $username, $password, $dbname);

$sql = $dbcon->query("SELECT * FROM codigo35 ORDER BY id_codigo DESC LIMIT 1");

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
        <form action="insertCod35.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastrar um novo número de etiqueta</h3>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código atual</span>
                </div>
                <input type="number" name="numCodigo" class="form-control" id="numCodigo" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $row[1]; ?>" readonly>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código novo G35/40</span>
                </div>
                <input type="number" name="numCod" placeholder="Insira o novo código da Gama 35/40" class="form-control" id="numCod" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de modificação</span>
                </div>
                <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
            </div>
          






            <div class="buttons">

                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>




        </form>
    </div>


</body>

</html>