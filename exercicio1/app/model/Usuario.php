<?php

class Usuario
{

    public int $id;
    public string $name;
    public string $username;
    public string $zipcode;
    public string $email;
    public string $password;
    protected Banco $banco;

    const TABELA = 'usuario';

    public function __construct()
    {
        $this->banco = Banco::instanciar();
    }

    public function listar()
    {
        if (!empty($_POST) && !empty($_POST["filtro"]) && !empty($_POST["pesquisa"])) {
            return $this->banco->listar(self::TABELA, '*', $_POST["filtro"] . " like '%" . $_POST["pesquisa"] . "%'");
        } else {
            return $this->banco->listar(self::TABELA, '*');
        }
    }

    public function inserir()
    {
        if (!empty($_POST)) {
            $this->validacao($_POST);
            $this->banco->inserir(self::TABELA, $_POST);
            header('Location: index.php?module=usuario&action=listar');
        }
    }

    public function alterar($id)
    {
        if (!empty($_POST)) {
            $this->validacao($_POST, $id);
            $this->banco->alterar(self::TABELA, $_POST, "id=$id");
            header('Location: index.php?module=usuario&action=listar');
        } else {
            return $this->banco->ver(self::TABELA, '*', "id=$id");
        }
    }

    public function apagar($id)
    {
        $this->banco->apagar(self::TABELA, array("id" => $id));
        header('Location:index.php?module=usuario&action=listar');
    }

    public function __sleep()
    {
        return array('id', 'name', 'username', 'zipcode', 'email', 'password');
    }

    public function validacao($dados, $id = null): void
    {
        if (!empty($dados)) {
            try {
                if ($dados['username']) {
                    if ($id) {
                        $registro = $this->banco->ver(self::TABELA, '*', "username='" . $dados['username'] . "' AND id !=" . $id);
                    } else {
                        $registro = $this->banco->ver(self::TABELA, '*', "username='" . $dados['username'] . "'");
                    }

                    if ($registro) {
                        throw new Exception('Usuário já cadastrado');
                    }
                }
                if ($dados['password']) {
                    if (strlen($dados['password']) < 8 || is_numeric($dados['password']) || !filter_var($dados['password'], FILTER_SANITIZE_NUMBER_INT)) {
                        throw new Exception('Senha deve conter no mínimos 8 caracteres pelo menos 1 letra e 1 número');
                    }
                }
            } catch (Exception $e) {
                print_r($e->getMessage());
                die();
            }
        }
    }
}
