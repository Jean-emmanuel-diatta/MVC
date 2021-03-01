<?php
namespace src\model;
use libs\system\Modele;

class RolesDb extends Modele
{
  public function findAll()
  {
    return  $this->entityManager
    ->createQuery("SELECT r FROM Role r")
    ->getResult();
    //array("ROLE_COMPTA","ROLE_FINANCE");
  }
}

?>