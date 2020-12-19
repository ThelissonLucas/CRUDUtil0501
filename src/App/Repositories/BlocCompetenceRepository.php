<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\BlocCompetence;


class BlocCompetenceRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'BlocCompetence';
        $this->classMapped = 'App\Entities\BlocCompetence';
        $this->idFieldName = 'iIdBlocCompetence';
    }
}
