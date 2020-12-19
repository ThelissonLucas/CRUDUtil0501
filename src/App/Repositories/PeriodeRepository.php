<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Periode;


class PeriodeRepository extends AbstractRepository
{
    public function __construct() {
        parent::__construct();
        $this->table = 'Periode';
        $this->classMapped = 'App\Entities\Periode';
        $this->idFieldName = 'iIdPeriode';
    }
}
