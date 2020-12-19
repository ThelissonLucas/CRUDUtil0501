<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Tuteur;


class TuteurRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Tuteur';
        $this->classMapped = 'App\Entities\Tuteur';
        $this->idFieldName = 'iIdTuteur';
    }
}
