<?php

namespace App\Repositories;

use Phaln\AbstractRepository;
use Phaln\AbstractEntity;
use App\Entities\Avoir;


class AvoirRepository extends AbstractRepository
{
    /**
     * Constructeur.
     * Fixe le nom des attributs.
     * Attention au nom de la clé primaire: par défaut c'est 'id'.
     */
    public function __construct()
    {
        parent::__construct();
        $this->table = 'Avoir';
        $this->classMapped = 'App\Entities\Avoir';
        $this->idFieldName = array('iIdPersonne','iIdRole');
    }
    
    public function getByPersonne(int $idPers): ?array {

        $resultSet = array();

        $query = "SELECT * FROM $this->table"
                . " WHERE iIdPersonne = :iIdPersonne ";

        $reqPrep = $this->db->prepare($query);
        $reqPrep->bindParam(':iIdPersonne', $idPers, \PDO::PARAM_INT);
        $reqPrep->execute();

        if ($reqPrep != FALSE) {

            while ($row = $reqPrep->fetch(\PDO::FETCH_ASSOC)) {
                $resultSet[] = new $this->classMapped($row);
            }
        } else {
            dump_var($reqPrep->errorInfo(), DUMP, 'PDOStatement::errorInfo():');
            throw new \Phaln\Exceptions\RepositoryException('Pb db dans AvoirRepository::getByPersonne(): ' . $reqPrep->errorInfo()[2]);
        }

        return $resultSet;
    }
    
    
}
