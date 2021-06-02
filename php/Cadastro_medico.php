<?php 

    require_once 'classe.php';
    $u = new usuario();

    if(isset($_POST['login'])){
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $email = addslashes($_POST['email']);
        $CRM = addslashes($_POST['CRM']);
        $espec = addslashes($_POST['espec']);

        if(!empty($login) && !empty($senha)){
            $u->conectar('VinDiesel','localhost','root',''); 
            echo "$msg";
                if($u->msg == ""){
                if($u->cadastrar_medico($login,$senha,$email,$CRM,$espec)){
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario foi cadastrado com sucesso!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../cadastro_medic.html'</script>";
                }else{
                    echo "<script language='javascript' type='text/javascript'>alert('O usuario já está cadastrado no sistema. Tente outro!')</script>";
                    echo "<script language='javascript' type='text/javascript'>window.location.href='../cadastro_medic.html';</script>";
                }
            }else{
                echo "Erro: ".$u->msg;
            }
        }else {
            echo "<script language='javascript' type='text/javascript'>alert('Preenha todos os campos!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.location.href='../cadastro_medic.html';</script>";
        }
    }

?>