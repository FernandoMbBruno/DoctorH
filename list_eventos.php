<?php
/**
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */
include 'conexao.php';

$query_events = "SELECT * FROM Agendamento";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];


while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id'];
    $title = $row_events['title'];
    $start = $row_events['start'];
    $espec = $row_events['Espec'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $title,
        'start' => $start, 
        'espec' => $espec,
        ];
}


echo json_encode($eventos);