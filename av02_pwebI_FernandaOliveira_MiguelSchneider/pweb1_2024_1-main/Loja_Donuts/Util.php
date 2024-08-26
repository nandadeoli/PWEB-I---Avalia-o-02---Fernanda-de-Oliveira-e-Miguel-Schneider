<?php
include "../db.class.php";

function logar($param){
    session_start();

    $db = new db();
    $db->conn();

    $result = $db->login($param);

    if($result !="Error"){
        $_SESSION['cpf'] = $param['cpf'];
        $_SESSION['senha'] = $param['senha'];

        header('Location: Main.php');

    }else{
        header('Location: LoginForm.php?msg=erro');
    }
}

function verificar(){
    session_start();

    if($_SESSION['cpf']==null){
        session_destroy();
        header('Location: LoginForm.php');
    }
}