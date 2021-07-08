

<?php
 include("../auth/validaADM.php");
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM inspetor WHERE nome LIKE '%$usuarios%'";
    $dadosInspetor = $connection -> query($sql);

    if($dadosInspetor -> num_rows > 0)
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
                while($exibir = $dadosInspetor -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["nome"] ?></td>
                        <td><?php echo $exibir["matricula"] ?></td>
                        
                        <td>
                            
                        
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                 <a href="deleteInspetor.php?matricula=<?php echo $exibir ["matricula"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                
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
