<?php

class Banco
{

    private static $instancia;
    private $conexao;

    public static function instanciar()
    {
        if (!self::$instancia) {
            self::$instancia = new Banco();
            self::$instancia->conectar();
        }
        return self::$instancia;
    }

    private function conectar()
    {
        global $config;

        $this->conexao = new PDO("{$config['driver']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']}", $config['user'], $config['pass']);
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function executar($sql, $dados = null)
    {
        $statement = $this->conexao->prepare($sql);
        $statement->execute($dados);

        if (empty($dados)) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function listar($tabela, $campos, $onde = null, $ordem = null, $limite = null)
    {
        $query = "SELECT $campos FROM $tabela";

        if (!empty($onde)) {
            $query .= " WHERE $onde";
        }

        if (!empty($ordem)) {
            $query .= " ORDER BY $ordem";
        }

        if (!empty($limite)) {
            $query .= " LIMIT $limite";
        }

        return $this->executar($query);
    }

    public function ver($tabela, $campos, $onde)
    {
        $query = "SELECT $campos FROM $tabela WHERE $onde LIMIT 1";

        $saida = $this->executar($query);

        if (isset($saida[0])) {
            return $saida[0];
        }
    }

    public function inserir($tabela, $dados)
    {
        if (!is_array($dados))
            return false;

        foreach ($dados as $campo => $valor) {
            $campos[] = $campo;
            $valores[] = $valor;
            $holders[] = "?";
        }

        $colunas = implode(", ", $campos);
        $holders = implode(", ", $holders);

        $query = "INSERT INTO $tabela ($colunas) VALUES($holders)";

        $this->executar($query, $valores);
    }

    public function alterar($tabela, $dados, $onde)
    {
        foreach ($dados as $campo => $valor) {
            $set[] = "$campo = ?";
            $valores[] = $valor;
        }

        $set = implode(", ", $set);

        $query = "UPDATE $tabela SET $set WHERE $onde";

        $this->executar($query, $valores);
    }

    public function apagar($tabela, $dados)
    {
        foreach ($dados as $campo => $valor) {
            $onde[] = "$campo = ?";
            $valores[] = $valor;
        }

        $onde = implode(" AND ", $onde);

        $query = "DELETE FROM $tabela WHERE $onde";

        $this->executar($query, $valores);
    }
}
