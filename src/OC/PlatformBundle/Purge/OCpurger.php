<?php
// src/OC/PlatformBundle/Purge/OCpurger.php

namespace OC\PlatformBundle\Purge;

class OCpurger
{
  private $day;
  private $application;
  private $minApplication;
  private $minDay;

  public function __construct($day, $application, $minApplication, $minDay)
  {
    $this->day    = $day;
    $this->application    = $application;
    $this->minApplication = (int) $minApplication;
    $this->minDay = (int) $minDay;
  }

   /**
    * Vérifie que les datas en BDD ne sont pas trop ancienne et qu'il n'y a pas de candidature
    *
//    * @param int $day
//    * @return bool
    */
   public function purge($day)
  {
//     return $day < $this->minLength;
//      For Each ... A FINIR ...
  }
}
