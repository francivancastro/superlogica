<?php

class FrontController
{

    public Usuario $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario;
        $this->view = new View;

        $action = 'index';
        if (isset($_GET['module'])) {
            $module = $_GET['module'];

            if (isset($_GET['action'])) {
                $action = $_GET['action'];
            }

            if (isset($_GET['id'])) {
                $dados = $this->$module->$action($_GET['id']);
            } else {
                $dados = $this->$module->$action();
            }

            $this->view->front("$module/$action", $dados);
        } else {
            $this->view->front($action);
        }
    }
}
