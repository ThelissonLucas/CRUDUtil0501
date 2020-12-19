<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Classe;


class ClasseRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Classe';
        $this->classMapped = 'App\Entities\Classe';
        $this->idFieldName = 'iIdClasse';
    }
}
