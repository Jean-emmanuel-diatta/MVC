<?php
namespace libs\system;

class Modele
{
  protected $entityManager;

  public function __construct()
  {
    require_once './bootstrap.php';
    $this-> entityManager = $entityManager;
  }
}
?>