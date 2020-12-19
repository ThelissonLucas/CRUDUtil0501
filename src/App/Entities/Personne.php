<?php
namespace App\Entities;
use Phaln\AbstractEntity;
use App\Entities\Avoir;
use App\Repositories\AvoirRepository;
use App\Repositories\RoleRepository;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Personne extends AbstractEntity
{
    protected $iIdPersonne = null;
    protected $cNom;
    protected $cPrenom;
    protected $cMail;
    protected $cMDP;
    protected $bCacher;
    
    private $avoir = null;
    
    /**
     * Surcharge du mutateur pour l'attribut $id qui ne peut pas être modifié.
     * @param int $val ne sert que si idPlan est null...
     */
    public function setIIdPersonne($val=null)
    {
	if($this->iIdPersonne === null)
	    $this->iIdPersonne = (int)$val;
    }
    
    // Ces deux méthodes ne sont nécessaire QUE si la clé primaire dans la table
    // porte un nom différent de id...
    /**
     * Permet de s'affranchir du fait que le champ id dans la table est différent...
     * @param type $val
     */
    public function setid($val=null)
    {
	$this->setIIdPersonne($val);
    }
    
    /**
     * Permet de s'affranchir du fait que le champ id dans la table est différent...
     * @return type
     */
    public function getid()
    {
	return $this->getIIdPersonne();
    }
    
    public function getAvoir() : array
    {
        $this->avoir = \Phaln\Manager::getRepository('Avoir')->getByPersonne($this->iIdPersonne);
        return $this->avoir;
    }
    
    public function getRoles() : array
    {
        $roles = array();
        $tabAvoir = \Phaln\Manager::getRepository('Avoir')->getByPersonne($this->iIdPersonne);
        foreach ($tabAvoir as $value) {
            $roles[] = $value->getRole();
        }
        return $roles;
    }
}
