

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM operadores WHERE nome LIKE '%$usuarios%' ORDER BY nome";
    $dadosOperador = $connection -> query($sql);

    if($dadosOperador -> num_rows > 0)
    {
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Nome</th>
                <th>Matrícula</th>
                <th></th>
                
            </tr>

            <?php
                while($exibir = $dadosOperador -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["nome"] ?></td>
                        <td><?php echo $exibir["matricula"] ?></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="editOperador.php?matricula=<?php echo $exibir["matricula"]?>" style="text-decoration: none; color: white">Editar</a>
                            </button>
                        
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                 <a href="deleteOperador.php?matricula=<?php echo $exibir ["matricula"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>
<div style="margin-left: 100px; margin-right: 100px;">
<?php
    }
    
    else
    {?>
        <div style="margin-left: 100px; margin-right: 100px;">
        <?php
        echo "Nenhum registro encontrado.";
    }
?>
    </div>
