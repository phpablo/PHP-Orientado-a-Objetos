<?php
require_once 'Aluno.php';

class Bolsista extends Aluno
{
  private $bolsa;

  public function renovarBolsa()
  {
    echo '<p>Renovando bolsa...<p/>';
  }

  public function pagarMensal()
  {
    echo "<p>$this->nome é bolsista,então paga com desconto<p/>";
  }

  function geBolsa()
  {
    return $this->bolsa;
  }
  function setBolsa($bolsa)
  {
    $this->bolsa = $bolsa;
  }
}
