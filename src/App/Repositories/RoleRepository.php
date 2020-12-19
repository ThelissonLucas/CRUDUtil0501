<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Role;

class RoleRepository extends AbstractRepository {

    /**
     * Constructeur.
     * Fixe le nom des attributs.
     * Attention au nom de la clé primaire: par défaut c'est 'id'.
     */
    public function __construct() {
        parent::__construct();
        $this->table = 'Role';
        $this->classMapped = 'App\Entities\Role';
        $this->idFieldName = 'iIdRole';
    }

}
