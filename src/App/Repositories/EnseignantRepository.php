<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Enseignant;


class EnseignantRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Enseignant';
        $this->classMapped = 'App\Entities\Enseignant';
        $this->idFieldName = 'iIdEnseignant';
    }
}
