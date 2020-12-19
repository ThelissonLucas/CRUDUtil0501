<?php
require_once '../config/testsConfig.php';

use Phaln\BDD;

try
{
    $db = BDD::get_bdd();
    var_dump($db);
}
catch (Throwable $e)
{
    echo 'Dans TestBdd:<br/>'.$e->getMessage().'<br/>';
    var_dump($e->getTrace());
    echo $e->getPrevious().'<br/>';
}
