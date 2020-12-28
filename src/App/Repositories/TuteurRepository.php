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

    public function getTuteurs()
    {
        $y = 0;
        $req = "SELECT Personne.iidpersonne, Personne.cnom, Personne.cprenom, Personne.cmail, role.cnomrole "
                . "FROM Personne "
                . "INNER JOIN Avoir ON Personne.iidpersonne = Avoir.iidpersonne "
                . "INNER JOIN Role ON Role.iidrole = avoir.iidrole "
                . "WHERE Personne.binactif = false AND Role.iidrole = 3 ";
            
        $prepare = $this->db->query($req);
        $prepare->setFetchMode(\PDO::FETCH_ASSOC);    
        $pers = array();
        while ($data = $prepare->fetch())
        {
                $pers[$y] = array(
                'iIdPersonne' => $data['iidpersonne'],
                'cNom' => $data['cnom'], 
                'cPrenom' => $data['cprenom'],
                'cMail' => $data['cmail'],
                'cNomRole' => $data['cnomrole'],
                );
                
            $y++;
               
        }
        //var_dump($Personne);
        return $pers;
    }
}
