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
  protected $Ms = 1.99E+30;
  protected $SeffT = 1.37E+03;
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
        return $radius*($this->Rj/$this->Rt);
    }
    elseif($radiusUnit == 2){
        return $radius*($this->Rs/$this->Rt);
    }
    else{
      return $radius;
    }
  }

  public function convertMasse($masse,$masseUnit)
  {
    if($masseUnit == 1){
      return $masse*($this->Mj/$this->Mt);
    }
    elseif($masseUnit == 2){
      return $masse*($this->Ms/$this->Mt);
    }
    else{
      return $masse;
    }
  }

  public function convertDistance($distance, $distanceUnit){
    if($distanceUnit == 1){
      return $distance*($this->al/$this->pc);
    }
    else{
      return $distance;
    }

  }

  public function convertAxis($axis,$axisUnit,$distance){
    if($axisUnit == 1){
      if (!empty($distance)){
        return $axis*$distance;
      }else{
        return null;
      }
    }
    else{
      return $axis;
    }
  }

  public function convertPeriod($period, $periodUnit){
    if($periodUnit == 1){
      return $period*365.25;
    }elseif($periodUnit == 2){
      return $period/24;
    }else{
      return $period;
    }
  }

  public function ChooseUnitAxis($axis, $distance){
    if(empty($axis) || !is_numeric($axis)){
      return;
    }
    elseif(($arsec = $axis/$distance) > 1 ){
      $axis = $arsec;
      $axis .= " arsecs";
    }
    else{
      $axis .= " UA";
    }
    return $axis;
  }
  public function ChooseUnitPeriod($period){
    if(empty($period) || !is_numeric($period)){
      return;
    }
    if ($period > 362.25){
      $period = $period / 362.25;
      $period .= " années";
    }
    else if($period < 1 ){
      $period = $period*24;
      $period .= " heures";
    }
    else{
      $period .= " jours";
    }
    return $period;

  }
  public function ChooseUnitMass($mass){
    if(empty($mass) || !is_numeric($mass)){
      return;
    }
    elseif($mass > ($this->Ms/$this->Mt)){
      $mass = $mass / ($this->Mt/$this->Ms);
      $mass .= " Ms";
    }
    elseif($mass > ($this->Mj/$this->Mt)){
      $mass = $mass / ($this->Mt/$this->Mj);
      $mass .= " Mj";
    }
    else{
      $mass .= " Mt";
    }
    return $mass;


  }
  public function ChooseUnitRadius($radius){
    if(empty($radius) || !is_numeric($radius)){
      return;
    }
    elseif($radius > ($this->Rs/$this->Rt)){
        $radius = $radius / ($this->Rs/$this->Rt);
        $radius .= " Rs";
    }
    elseif( $radius > ($this->Rj/$this->Rt)){
        $radius = $radius / ($this->Rj/$this->Rt);
        $radius .= " Rj";
    }
    else{
      $radius .= " Rt";
    }
    return $radius;
  }
}


?>
