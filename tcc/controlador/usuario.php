<?php
require_once '../Conexao/CRUDlogin.php';
$acao = 'verifica';

switch ($acao) {
    case 'verifica':
        $crud = new CRUDlogin();


        if (isset($_POST['gravar'])) {
            $usuario = $crud->GetUsuario($_POST['usuario']);
            if ($_POST['usuario'] == $usuario->nome and $_POST['senha'] == $usuario->senha) {
               header('Location: ../telas/sucesso.php ');
            } else {
                echo 'Opa ';
            }
        } else {
            include '../telas/login.php';

        }
        break;
}