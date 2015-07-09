<?php
class Gcm {
  private $x0_seed;
  private $a_multiplier;
  private $c_additive_constant;
  private $m_module;

  function Gcm(){
    $this->x0_seed = 5;
    $this->a_multiplier = 5;
    $this->c_additive_constant = 0;
    $this->m_module = 10007;
  }

  private function value($aXi = 0){
    return ((($this->a_multiplier * $aXi) + $this->c_additive_constant) % $this->m_module);
  }

  public function Xn() {
    $aXi = $this->value($this->x0_seed);

    echo $aXi . "\n";

    while ($aXi != $this->x0_seed) {
      $aXi = $this->value($aXi);
      echo $aXi . "\n";
    }
  }
}


$gcm = new Gcm();

$gcm->Xn();
