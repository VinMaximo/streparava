<?php include("../auth/validaQualidade.php");?>

<?php
$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT *, DATE_FORMAT(data,'%d/%m/%Y') as datas FROM g70";
    $dadosPDCa = $connection -> query($sql);

    if($dadosPDCa -> num_rows > 0)
    {
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Etiqueta</th>
                <th>Data</th>
                <th>Inspetor</th>
                <th></th>
                
            </tr>

            <?php
                while($exibir = $dadosPDCa -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["etiqueta"] ?></td>
                        <td><?php echo $exibir["datas"] ?></td>
                        <td><?php echo $exibir["inspetor"] ?></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="editAprovar70.php?etiqueta=<?php echo $exibir["etiqueta"]?>" style="text-decoration: none; color: white">Aprovar</a>
                            </button>
                        
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="createPDF.php?etiqueta=<?php echo $exibir["etiqueta"]?>" style="text-decoration: none; color: white">Imprimir</a>
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
