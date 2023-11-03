<?php

class Pessoa
{
  //Atributos
  private $nome;
  private $idade;
  private $sexo;

  //Método Construtor da classe
  public function __construct($nome, $idade, $sexo)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
  }

  //Métodos Publicos
  public function fazerNiver()
  {
    $this->idade++;
  }

  // Métodos Getters
  function getNome()
  {
    return $this->nome;
  }
  function getIdade()
  {
    return $this->idade;
  }
  function getSexo()
  {
    return $this->sexo;
  }

  // Métodos Setters
  function setNome($no)
  {
    $this->nome = $no;
  }
  function setIdade($id)
  {
    $this->idade = $id;
  }
  function setSexo($se)
  {
    $this->sexo = $se;
  }
}
