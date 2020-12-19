<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Parametre;


class ParametreRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Parametre';
        $this->classMapped = 'App\Entities\Parametre';
        $this->idFieldName = 'iIdParametre';
    }
}