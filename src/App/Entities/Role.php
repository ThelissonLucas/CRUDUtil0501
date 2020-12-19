<?php
namespace App\Entities;

use Phaln\AbstractEntity;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Role extends AbstractEntity
{
    protected $iIdRole = null;
    protected $cNomRole;

    /**
     * Surcharge du mutateur pour l'attribut $id qui ne peut pas être modifié.
     * @param int $val ne sert que si idPlan est null...
     */
    public function setIIdRole($val=null)
    {
	if($this->iIdRole === null)
	    $this->iIdRole = (int)$val;
    }
    
    // Ces deux méthodes ne sont nécessaire QUE si la clé primaire dans la table
    // porte un nom différent de id...
    /**
     * Permet de s'affranchir du fait que le champ id dans la table est différent...
     * @param type $val
     */
    public function setid($val=null)
    {
	$this->setIIdRole($val);
    }
    
    /**
     * Permet de s'affranchir du fait que le champ id dans la table est différent...
     * @return type
     */
    public function getid()
    {
	return $this->getIIdRole();
    }
}
