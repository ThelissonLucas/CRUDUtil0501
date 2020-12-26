<?php
require_once '../config/appConfig.php';
use App\Validators\RoleValidator;
use App\Repositories\RoleRepository;

$ObjetRoleRep = new RoleRepository;
$arrayObjetRole = $ObjetRoleRep->GetAll();

 
  
     foreach ($arrayObjetRole As $role)
	 {
    echo $role->getIIdRole();
    echo $role->getCNomRole(); 
         }