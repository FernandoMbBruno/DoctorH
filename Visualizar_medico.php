<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<!-- Importando o JS,Css, PHP-->
<link href='./lib/main.css' rel='stylesheet' />
<script src='./lib/main.js'></script>
<script src="./js/calendario.js"></script>



<!--Linkando bootstrar jquery etc-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }



  

</style>
</head>

<div>
	<!--Iniciando uma sessão no php, Fazendo a segurança para que o usuario que não esteja cadastrado não entre -->
	<?php

	session_start();
	if (!isset($_SESSION['ID'])) {
		echo '<script type="text/JavaScript"> alert("Você não tem acesso essa pagina");
		window.location.href = "index.html";
		</script>';
	} else {
	}
	?>
</div>

<body>

  <div id='calendar-container'>
    <div id='calendar'></div>
  </div>

  <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-3">ID do agendamento:</dt>
                    <dd class="col-sm-9 " id="id"></dd>

                    <dt class="col-sm-3">Nome do Cliente:</dt>
                    <dd class="col-sm-9 " id="title"></dd>

                    <dt class="col-sm-3">Dia do Agendamento:</dt>
                    <dd class="col-sm-9 " id="start"></dd>

                    <dt class="col-sm-3"> Horario:</dt>
                    <dd class="col-sm-9 " id="horario"></dd>

                    <dt class="col-sm-3"> Videoconferência: </dt>
                    <dd class="col-sm-9 " id=><a href="https://video-app-6803-4828-dev.twil.io/?passcode=41581768034828"> Entrar</a></dd>




            </div>
        </div>
    </div>
</div>
<div > <a href="./php/logout.php" id="sair"></a></div>

</body>
</html>
