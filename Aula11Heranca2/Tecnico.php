<?php
require_once 'Aluno.php';

class Tecnico extends Aluno
{
  private $registroProfissional;


  function praticar()
  {
    echo "<p> Praticando algo...<p/>";
  }


  function getRegistroProfissional()
  {
    return $this->registroProfissional;
  }
  function setRegistroProfissional($registroProfissional)
  {
    $this->registroProfissional = $registroProfissional;
  }
}
