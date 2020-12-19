<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Competence;


class CompetenceRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Competence';
        $this->classMapped = 'App\Entities\Competence';
        $this->idFieldName = 'iIdCompetence';
    }
}
