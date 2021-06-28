<?php

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

include("../../data/connection.php");

$sql = "SELECT *, DATE_FORMAT(data,'%d/%m/%Y') as datas FROM levantamento65f order by data DESC";

$dadosLevantamento65 = $connection->query($sql);

if ($dadosLevantamento65->num_rows > 0) {
?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Data</th>
                <th>Eixo inicial</th>
                <th>Eixo final</th>
                <th></th>
            </tr>

            <?php
            while ($exibir = $dadosLevantamento65->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $exibir["datas"] ?></td>
                    <td><?php echo $exibir["etiqueta1"] ?></td>
                    <td><?php echo $exibir["etiqueta2"] ?></td>

                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a href="editFinal65.php?id=<?php echo $exibir["id_levantamento65"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>

                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteFinal65.php?id=<?php echo $exibir["id_levantamento65"] ?>" style="text-decoration: none; color: white"> Excluir </a>
                        </button>


                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php
} else { ?>
    <div style="margin-left: 100px; margin-right: 100px;">
    <?php
    echo "Nenhum registro encontrado.";
}
    ?>