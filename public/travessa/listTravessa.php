<?php

include("../Template/header.php");
include("../auth/validaMontagem.php");

?>
<br>
<div style="margin-left: 100px; margin-right: 100px;">
    <h2>Lista de travessas</h2>

    <br>

    <div class="buttons">
        <a href="../travessa/createTravessa.php" class="btn btn-primary">Cadastre uma travessa</a>
    </div>
</div>

<?php

include("../../data/connection.php");

$sql = "SELECT * FROM travessa ORDER BY data";
$dadosTravessa = $connection->query($sql);

if ($dadosTravessa->num_rows > 0) {
?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Código</th>
                <th>Data</th>

            </tr>

            <?php
            while ($exibir = $dadosTravessa->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $exibir["codigo"] ?></td>
                    <td><?php echo $exibir["data"] ?></td>

                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a href="editTravessa.php?id=<?php echo $exibir["id_travessa"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>


                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
} else {?>
    <div style="margin-left: 100px; margin-right: 100px;">
    <?php
    echo "Nenhum registro encontrado.";
}
?>