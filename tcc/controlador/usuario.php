<?php
require_once '../Conexao/CRUDlogin.php';

switch ($acao):
    case 'verifica':
        $crud = new CRUDlogin();
        $usuario = $crud->GetUsuario(1);
        include '../telas/login.php';
        if (isset($_POST['gravar'])){
            if ($_POST['nome'] == $usuario->nome){

            }
        }
