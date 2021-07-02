

<?php
include("../auth/validaMontagem.php");
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM g65 WHERE etiqueta LIKE '%$usuarios%' ";

    $dadosPDC3 = $connection -> query($sql);

    if($dadosPDC3 -> num_rows > 0)
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
                while($exibir = $dadosPDC3 -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["etiqueta"] ?></td>
                        <td><?php echo $exibir["data"] ?></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a href="editPDC50.php?etiqueta=<?php echo $exibir["etiqueta"]?>" style="text-decoration: none; color: white">Editar</a>
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


