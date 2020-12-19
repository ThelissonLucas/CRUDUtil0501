<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Personne;


class PersonneRepository extends AbstractRepository
{
    /**
     * Constructeur.
     * Fixe le nom des attributs.
     * Attention au nom de la clé primaire: par défaut c'est 'id'.
     */
    public function __construct()
    {
        parent::__construct();
        $this->table = 'Personne';
        $this->classMapped = 'App\Entities\Personne';
        $this->idFieldName = 'iIdPersonne';
    }
    
    public function authentify(array $user):bool
    {
        if(DUMP) var_dump($user);
        $login=$user['cMail'];
        $mdp=$user['cMDP'];
        $query = "SELECT iidpersonne FROM $this->table WHERE cMail = :cMail ";
        $res = $this->db->prepare($query);
        $res->bindParam(':cMail', $login, \PDO::PARAM_STR);
        $res->execute();
        if ($res->rowCount() == 1) {
            //  On a quelqu'un du login fourni, on va vérifier le mdp
            $row = $res->fetch(\PDO::FETCH_ASSOC);
            if(DUMP) var_dump($row);
            $entite =$this->getById($row['iidpersonne']);
            
            if(DUMP) var_dump('personne trouvee : ',$entite);
            //  On vérifie le mdp de la bdd avec celui du formulaire
            if (password_verify($mdp, $entite->getCMDP())) {
                if(DUMP) var_dump('mdp correct');
                //  L'utilisateur est authentifié
                $entite->setCMDP(null);
                $_SESSION['user'] = $entite;
                if(DUMP) var_dump($_SESSION, 'user authentify $_session');
                return true;
            } else {
                if(DUMP) var_dump('mdp incorrect');
                return false;
            }
        } else {
            return false;
        }
    }
}
