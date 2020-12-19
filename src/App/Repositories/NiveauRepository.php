<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Niveau;


class NiveauRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Niveau';
        $this->classMapped = 'App\Entities\Niveau';
        $this->idFieldName = 'iIdNiveau';
    }
}
