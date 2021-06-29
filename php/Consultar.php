<?php
require_once 'classe.php';
$u = new Conexão();



$strcon = mysqli_connect('localhost', 'root', '', 'VinDiesel') or die('erro ao acessar o banco de dados');
$sql = "select * from Agendamento order by id";
$result = mysqli_query($strcon, $sql) or die('erro ao acessar a tabela');


while ($registro = mysqli_fetch_array($result)) {
    $id = $registro['id'];
    $title = $registro['title'];
    $start = $registro['start'];
    $Espec = $registro['Espec'];

    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $title . "</td>";
    echo "<td>" . $start . "</td>";
    echo "<td>" . $Espec . "</td>";
    echo "</tr>";
};


?>

<html>

</html>