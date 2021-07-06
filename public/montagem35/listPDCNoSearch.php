

<?php
include("../auth/validaMontagem.php");
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT *, DATE_FORMAT(data,'%d/%m/%Y') as datas FROM g35";
    $dadosPDC = $connection -> query($sql);

    if($dadosPDC -> num_rows > 0)
    {
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Etiqueta</th>
                <th>Data</th>
                <th></th>
            </tr>

            <?php
                while($exibir = $dadosPDC -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["etiqueta"] ?></td>
                        <td><?php echo $exibir["datas"] ?></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a href="editPDC.php?etiqueta=<?php echo $exibir["etiqueta"]?>" style="text-decoration: none; color: white">Editar</a>
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
    }
    
    else
    {?>
        <div style="margin-left: 100px; margin-right: 100px;">
        <?php
        echo "Nenhum registro encontrado.";
    }
?>
    </p>
