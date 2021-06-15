<?php include("../Template/header.php");
include_once("../../data/connection.php");
?>

<div style="margin-left: 100px; margin-right: 100px;">
    <br>
    <br>
    <h2>Usuários</h2>

    <br>

    <div class="buttons">
        <a href="../usuario/createUser.php" class="btn btn-primary">Cadastre um usuário</a>
    </div>

    <br>

</div>

<?php

include("../../data/connection.php");

$sql = "SELECT * FROM usuario";
$dadosUsuario = $connection->query($sql);

if ($dadosUsuario->num_rows > 0) {
?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>User</th>
                <th>Prioridade (3-Administrador/2-Montagem/1-Qualidade)</th>

            </tr>

            <?php
            while ($exibir = $dadosUsuario->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $exibir["user"] ?></td>
                    <td><?php echo $exibir["prioridade"] ?></td>

                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            <a href="editUser.php?id=<?php echo $exibir["id_usuario"] ?>" style="text-decoration: none; color: white">Editar</a>
                        </button>


                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <p style="margin-left: 100px; margin-right: 100px;">
    <?php
} else { ?>
        <br>
        <br>
    <div style="margin-left: 100px; margin-right: 100px;">
    <?php
    echo "Nenhum registro encontrado.";
}
    ?>
    </p>