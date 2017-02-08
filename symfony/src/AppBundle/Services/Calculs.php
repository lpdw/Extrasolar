<?php
// src/AppBundle/Services/Calculs.php
namespace AppBundle\Services;

class Calculs
{
  protected $al = 9.4607304725808E+015;
  protected $pc = 3.09E+16;
  protected $UA = 1.50E+11;
  protected $Rt = 6371008;
  protected $Rj = 69911000;
  protected $Rs = 696342000;
  protected $Mt = 5.97E+24;
  protected $Mj = 1.90E+27;
  protected $SeffT = 1.37E+03;
  protected $Ms = 1.99E+30;
  protected $SIGMA = 5.67E-08;

  public function __construct()
  {
  }
  public function calculSeff($axis, $hosts)
  {
      $val = 0;
      foreach($hosts as $host){
        $val .= $this->SIGMA*pow($host->getRA(), 2)*pow($this->Rt,2)*pow($host->getTemperature(),4);
      }
      return $val/($this->SeffT*$axis*$this->UA);
      //'seff'=SIGMA*([host's radius1]^2*Rt^2*[host's temp1]^4+[host's radius2]^2*Rt^2*[host's temp2]^4)/(SeffT*'axis'*UA)
  }
  public function calculDensity($mass,$radius){
    return 3*$mass*$this->Mt/(4000*pi()*pow($radius,3)*pow($this->Rt,3));
    // 'density'=3*'mass'*Mt/(4000*PI*'radius'^3*Rt^3)
  }

  public function convertRadius($radius, $radiusUnit)
  {
    if( $radiusUnit == 1){
        return $radius*($Rj/$Rt);
    }
    elseif($radiusUnit == 2){
        return $radius*($Rs/$Rt);
    }
    else{
      return $radius;
    }
  }

  public function convertMasse($masse,$masseUnit)
  {
    if($masseUnit == 1){
      return $masse*($Mj/$Mt);
    }
    elseif($masseUnit == 2){
      return $masse*($Ms/$Mt);
    }
    else{
      return $masse;
    }
  }

  public function convertDistance($distance, $distanceUnit){
    if($distanceUnit == 1){
      return $distance*($al/$pc);
    }
    else{
      return $distance;
    }

  }

  // public function convertAxis($axis,$axisUnit,$distance){
  //   if($axisUnit == 1){
  //     if ($distance == )
  //   }
  // }
}


?>
