<?php 

    require_once 'classe.php';
    $u = new Agendamento();

    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $data = addslashes($_POST['data']);
        $hora = addslashes($_POST['hora']);

        
        if(!empty($nome) && !empty($data)){
            $u->conectar('teste','localhost','root',''); 
            echo "$msg";
                if($u->msg == ""){
                if($u->cadastrar($nome,$data,$hora)){
                    echo "<script language='javascript' type='text/javascript'>alert('Agendado com sucesso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../Agendamento.html'</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='../Agendamento.html';</script>";
        }
    }

?>