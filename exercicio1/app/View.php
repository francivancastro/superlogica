<?php

class View
{

    public function front($arquivo, $dados = null)
    {
        require("view/front/topo.tpl.php");
        require("view/front/$arquivo.tpl.php");
        require("view/front/rodape.tpl.php");
    }
}
