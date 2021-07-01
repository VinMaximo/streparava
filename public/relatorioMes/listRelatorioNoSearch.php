

<?php

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT *  FROM relatoriomes";
    $dadosRelatorio = $connection -> query($sql);

    if($dadosRelatorio -> num_rows > 0)
    {
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Mês</th>
                <th>Ano</th>
                <th></th>
                
            </tr>

            <?php
                while($exibir = $dadosRelatorio -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["mes"] ?></td>

                        <td><?php echo $exibir["ano"] ?></td>
                   

                        
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="exibeRelatorio.php?mes=<?php echo $exibir["mes"]?> & ano=<?php echo $exibir["ano"]?>" style="text-decoration: none; color: white">Abrir relatório</a>
                            </button>
                        
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                 <a href="deleteRelatorio.php?mes=<?php echo $exibir["mes"]?> & ano=<?php echo $exibir["ano"]?>" style="text-decoration: none; color: white"> Excluir </a> 
                                
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>
    <br>
    <br>

<?php
    }
    
    else
    {
        ?>
        <br>
        <div style="margin-left: 100px; margin-right: 100px;">
        <?php
        echo "Nenhum registro encontrado.";
    }
?>
    </div>
