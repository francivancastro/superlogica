<?php

require('config.php');
ob_start();
session_start();

function libloader($classe)
{
    $dir = dirname(__FILE__);
    $arquivo = "$dir/lib/$classe.php";

    if (file_exists($arquivo)) {
        require_once($arquivo);
        return true;
    }
}

function apploader($classe)
{
    $dir = dirname(__FILE__);
    $arquivo = "$dir/app/$classe.php";

    if (file_exists($arquivo)) {
        require_once($arquivo);
        return true;
    }
}

function modloader($classe)
{
    $dir = dirname(__FILE__);
    $arquivo = "$dir/app/model/$classe.php";

    if (file_exists($arquivo)) {
        require_once($arquivo);
        return true;
    }
}

spl_autoload_register('apploader');
spl_autoload_register('libloader');
spl_autoload_register('modloader');
