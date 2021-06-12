<?php 
require_once 'classe.php';
    $u = new Conexão();

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>NOME</th>";
    echo "<th>calendario</th>";
    echo "<th>Horario</th>";
    echo "</tr>";

    $strcon = mysqli_connect('localhost','root','','VinDiesel') or die ('erro ao acessar o banco de dados');
    $sql = "select * from Agendamento";
    $result = mysqli_query($strcon,$sql) or die('erro ao acessar a tabela');


    while($registro = mysqli_fetch_array($result))
    {
        $nome = $registro['Nome'];
        $calendario = $registro['calendario'];
        $horario = $registro['Hora'];

    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$calendario."</td>";
     echo "<td>".$horario."</td>";
    echo "</tr>";
      
        };

    
?>

<html>+
</html>