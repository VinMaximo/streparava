

<?php

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
if (isset($_GET["mes"])) {
    if (isset($_GET["ano"])) {

        $mes = $_GET["mes"];
        $ano = $_GET["ano"];
        echo $sql;
        $sql = "SELECT * FROM levantamento35f WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
        $resultado = $connection->query($sql);
        $dadosRelatorio = $resultado->fetch_assoc();
?>

<?php

    include("../../data/connection.php");

    

    if($dadosRelatorio -> num_rows > 0)
    {
    ?>
    <div style="margin-left: 100px; margin-right: 100px;">
        <br>
        <table class="table" style="text-align: center;">
            <tr>
                <th>Data</th>
                <th></th>
                
            </tr>

            <?php
                while($exibir = $dadosRelatorio -> fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $exibir["datas"] ?></td>
                   

                        
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">
                                <a href="exibeRelatorio.php?data=<?php echo $exibir["data"]?>" style="text-decoration: none; color: white">Abrir relatório</a>
                            </button>
                        
                            <button type="submit" class="btn btn-danger btn-sm" formmethod="post">
                                 <a href="deleteRelatorio.php?data=<?php echo $exibir ["data"] ?>" style="text-decoration: none; color: white"> Excluir </a> 
                                
                            </button>
                        </td>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>

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

}
}
?>
    </div>
