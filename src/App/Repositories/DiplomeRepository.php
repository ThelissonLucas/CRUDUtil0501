<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Diplome;


class DiplomeRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Diplome';
        $this->classMapped = 'App\Entities\Diplome';
        $this->idFieldName = 'iIdDiplome';
    }
}