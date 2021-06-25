<?php
include_once("../../data/connection.php");

$data = $_POST["date"];
$prod7 = $_POST["numProd7"];
$t7 = $_POST["time7"];
$obs7 = $_POST["obs7"];
$prod8 = $_POST["numProd8"];
$t8 = $_POST["time8"];
$obs8 = $_POST["obs7"];
$prod9 = $_POST["numProd9"];
$t9 = $_POST["time9"];
$obs9 = $_POST["obs7"];
$prod10 = $_POST["numProd10"];
$t10 = $_POST["time10"];
$obs10 = $_POST["obs7"];
$prod11 = $_POST["numProd11"];
$t11 = $_POST["time11"];
$obs11 = $_POST["obs7"];
$prod12 = $_POST["numProd12"];
$t12 = $_POST["time12"];
$obs12 = $_POST["obs7"];
$prod13 = $_POST["numProd13"];
$t13 = $_POST["time13"];
$obs13 = $_POST["obs7"];
$prod14 = $_POST["numProd14"];
$t14 = $_POST["time14"];
$obs14 = $_POST["obs7"];
$prod15 = $_POST["numProd15"];
$t15 = $_POST["time15"];
$obs15 = $_POST["obs7"];
$prod16 = $_POST["numProd16"];
$t16 = $_POST["time16"];
$obs16 = $_POST["obs7"];
$total= $_POST["numProdt"];
$etiqueta1= $_POST["numEtiq1"];
$etiqueta2= $_POST["numEtiq2"];


$sql = "INSERT INTO 
    levantamento35f (data,prod7,t7,obs7,prod8,t8,obs8,prod9,t9,obs9,prod10,t10,obs10,prod11,t11,obs11,prod12,t12, obs12, prod13, t13, obs13, prod14, t14, obs14, prod15, t15, obs15, prod16, t16, obs16,total, etiqueta1, etiqueta2)
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
        '$etiqueta1',
        '$etiqueta2'
)";



$resultado = $connection->query($sql);

if ($resultado) { ?>
    <script>
        alert("Levantamento diário cadastrado com sucesso");
        window.location = '../final35/listFinal35.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a planilha");
    </script>

<?php
}

?>