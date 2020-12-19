<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Etudiant;


class EtudiantRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Etudiant';
        $this->classMapped = 'App\Entities\Etudiant';
        $this->idFieldName = 'iIdEtudiant';
    }
}
