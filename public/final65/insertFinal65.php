<?php
include_once("../../data/connection.php");
include("../auth/validaMontagem.php");
$data = $_POST["date"];
$prod7 = $_POST["numProd7"];
$t7 = $_POST["time7"];
$obs7 = $_POST["obs7"];
$prod8 = $_POST["numProd8"];
$t8 = $_POST["time8"];
$obs8 = $_POST["obs8"];
$prod9 = $_POST["numProd9"];
$t9 = $_POST["time9"];
$obs9 = $_POST["obs9"];
$prod10 = $_POST["numProd10"];
$t10 = $_POST["time10"];
$obs10 = $_POST["obs10"];
$prod11 = $_POST["numProd11"];
$t11 = $_POST["time11"];
$obs11 = $_POST["obs11"];
$prod12 = $_POST["numProd12"];
$t12 = $_POST["time12"];
$obs12 = $_POST["obs12"];
$prod13 = $_POST["numProd13"];
$t13 = $_POST["time13"];
$obs13 = $_POST["obs13"];
$prod14 = $_POST["numProd14"];
$t14 = $_POST["time14"];
$obs14 = $_POST["obs14"];
$prod15 = $_POST["numProd15"];
$t15 = $_POST["time15"];
$obs15 = $_POST["obs15"];
$prod16 = $_POST["numProd16"];
$t16 = $_POST["time16"];
$obs16 = $_POST["obs16"];
$total = $prod7 + $prod8 + $prod9 + $prod10 + $prod11 + $prod12 + $prod13 + $prod14 + $prod15 + $prod16; 
$tempo_total = $t7 + $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14 + $t15 + $t16;
$etiqueta1 = $_POST["numEtiq1"];
$etiqueta2 = $_POST["numEtiq2"];





if (($t7 !== "0" && $obs7 == "") or ($t8 !== "0" && $obs8 == "") or ($t9 !== "0" && $obs9 == "") or ($t10 !== "0" && $obs10 == "") or ($t11 !== "0" && $obs11 == "") or ($t12 !== "0" && $obs12 == "") or ($t13 !== "0" && $obs13 == "") or ($t14 !== "0" && $obs14 == "") or ($t15 !== "0" && $obs15 == "") or ($t16 !== "0" && $obs16 == "")) {
//?>
   <script>
        alert("É necessário inserir uma observação após a inserção do tempo de parada");
        window.history.back();
    </script> 
    
    

<?php
} else {


$sql = "INSERT INTO 
    levantamento65f (data,prod7,t7,obs7,prod8,t8,obs8,prod9,t9,obs9,prod10,t10,obs10,prod11,t11,obs11,prod12,t12, obs12, prod13, t13, obs13, prod14, t14, obs14, prod15, t15, obs15, prod16, t16, obs16,total, tempo_total, etiqueta1, etiqueta2)
    VALUES(
        '$data', 
        '$prod7',
        '$t7',
        '$obs7',
        '$prod8',
        '$t8',
        '$obs8',
        '$prod9',
        '$t9',
        '$obs9',
        '$prod10',
        '$t10',
        '$obs10',
        '$prod11',
        '$t11',
        '$obs11',
        '$prod12',
        '$t12',
        '$obs12',
        '$prod13',
        '$t13',
        '$obs13',
        '$prod14',
        '$t14',
        '$obs14',
        '$prod15',
        '$t15',
        '$obs15',
        '$prod16',
        '$t16',
        '$obs16',
        '$total',
        '$tempo_total',
        '$etiqueta1',
        '$etiqueta2'
)";



$resultado = $connection->query($sql);

if ($resultado) {
     ?>
    <script>
        alert("Levantamento diário cadastrado com sucesso");
        window.location = '../final65/listFinal65.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a planilha");
    </script>

<?php
}
}

?>