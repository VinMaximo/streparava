<?php
include("../auth/validaQualidade.php");
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

include("../../data/connection.php");

$sql = "SELECT *, DATE_FORMAT(data,'%d/%m/%Y') as datas FROM refret order by data DESC";

$dadosRefret = $connection->query($sql);

if ($dadosRefret->num_rows > 0) {
?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
        <tr>
                <th>Data</th>
                <th>Total retrabalho</th>
                <th>Total refugo</th>
                <th></th>
            </tr>

            <?php
            while ($exibir = $dadosRefret->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $exibir["datas"] ?></td>
                    <td><?php echo $exibir["total_retrabalho"] ?></td>
                    <td><?php echo $exibir["total_refugo"] ?></td>
                  
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a href="editRefret.php?id=<?php echo $exibir["id_refret"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>

                        <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                            <a href="deleteRefret.php?id=<?php echo $exibir["id_refret"] ?>" style="text-decoration: none; color: white"> Excluir </a>
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