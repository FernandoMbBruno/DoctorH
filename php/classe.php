<?php

    Class Usuario{
            
        private $pdo;
        public $msg = "";

        public function conectar($dbname,$host,$usuario,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);
                
            } catch (PDOException $erro) {
                global $msg;
                $msg = $erro->getMessage();
            }
            
        }
        
        public function cadastrar($login,$senha,$email){
            global $pdo;
            $senhaMD5=MD5($senha);
            //  Verifica se já existe
            $sql = $pdo->query("SELECT * FROM usuarios WHERE login='$login'");
            $sql->execute();
            if($sql->rowCount() > 0){
                echo "Este usuário já existe";
                return false;
            }
            else{
                // não existe, cadastrar
                $sql = $pdo->prepare("INSERT INTO usuarios (login,senha,email) VALUES ('$login','$senhaMD5','$email')");
                $sql->execute();
                return true;
            }
            
        }

        public function cadastrar_medico($login,$senha,$email,$CRM,$espec){
            global $pdo;
            $senhaMD5=MD5($senha);
            //  Verifica se já existe
            $sql = $pdo->query("SELECT * FROM medico WHERE login='$login'");
            $sql->execute();
            if($sql->rowCount() > 0){
                echo "Este usuário já existe";
                return false;
            }
            else{
                // não existe, cadastrar
                $sql = $pdo->prepare("INSERT INTO medico (login,senha,email,CRM,Espec) VALUES ('$login','$senhaMD5','$email','$CRM','$espec')");
                $sql->execute();
                return true;
            }
            
        }


        public function logar($login,$senha){
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT login FROM usuarios WHERE login = '$login' AND senha = '$senhaMD5'");
            $sql->execute();
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql -> fetch();
                session_start();
                $_SESSION['ID'] = $dado['login'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }


        public function logar_medico($login,$senha){
            global $pdo;
            $senhaMD5=MD5($senha);
            // //  Verifica se está cadastrado
            $sql = $pdo->prepare("SELECT login FROM medico WHERE login = '$login' AND senha = '$senhaMD5'");
            $sql->execute();
            if($sql->rowCount() > 0){
                // está cadastrado
                $dado = $sql -> fetch();
                session_start();
                $_SESSION['ID'] = $dado['login'];
                return true;
            }else{
                // não está cadastrado
                return false;
            }
        }

      
       

    }

    Class Agendamento{
            
        private $pdo;
        public $msg = "";

        public function conectar($dbname,$host,$usuario,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);
                
            } catch (PDOException $erro) {
                global $msg;
                $msg = $erro->getMessage();
            }
            
        }
        
        public function cadastrar($nome,$data,$espec){
            global $pdo;
            //  Verifica se já existe
            $sql = $pdo -> prepare("SELECT ID FROM Agendamento WHERE title = $nome");
            $sql->execute();
            if($sql->rowCount() > 0){
                // já existe
                return false;
            }else{ 
                // não existe, cadastrar
                $sql = $pdo->prepare("INSERT INTO Agendamento (title,start,Espec) VALUES ('$nome','$data','$espec')");
                $sql->execute();
                return true;
            }
            
        }
    }

    class Conexão{
        
        private $pdo;
        public $msg = "";
        public function conectar($dbname,$host,$usuario,$senha){
            global $pdo;
            try {                
                $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);
                
            } catch (PDOException $erro) {
                global $msg;
                $msg = $erro->getMessage();
            }
            
        }
    }


?>