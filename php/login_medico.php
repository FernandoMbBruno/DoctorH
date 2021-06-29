<?php 

    require_once 'classe.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
     
        if(!empty($login) && !empty($senha)){
            $u->conectar('VinDiesel','localhost','root',''); 
            //echo "msg: ".$msg;
            if($u->msg == ""){
                if($u->logar_medico($login,$senha)){
                  $_COOKIE['login']= $_POST['login'];
                  echo "variavel global: ".$_COOKIE['login'];
                  header("location: ../Visualizar_medico.php");
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('Senha ou Usuario Incorreto')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../Cadastro_medic.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='../Cadastro_medic.html';</script>";
        }
    }
