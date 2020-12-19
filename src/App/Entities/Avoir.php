<?php

namespace App\Entities;

use Phaln\AbstractEntity;
use App\Entities\Personne;
use App\Entities\Role;


class Avoir extends AbstractEntity
{
    protected $iIdAvoir = null;
    protected $iIdRole = null;
    protected $iIdPersonne = null;
    
    private $role=null;
    private $personne=null;

    public function setIIdAvoir($val=null) {
        if($this->iIdAvoir === null)
            $this->iIdAvoir = (int)$val;
    }

    public function setid($val=null) {
        $this->setIIdAvoir($val);
    }
    
    public function getid() {
        return $this->getIIdAvoir();
    }

    public function getPersonne() : Personne {
        //  Si $personne est null, on le récupère par le PesonneRepository donné par le Manager
        if(is_null($this->personne)) {
            $this->personne = \Phaln\Manager::getRepository('Personne')->getEntityId($this->iIdPersonne);
        }
        return $this->personne;
    }

    public function getRole() : Role {
        //  Si $role est null, on le récupère par le PesonneRepository donné par le Manager
        if(is_null($this->role)) {
            $this->role = \Phaln\Manager::getRepository('Role')->getEntityId($this->iIdRole);
        }
        return $this->role;
    }
    
}
