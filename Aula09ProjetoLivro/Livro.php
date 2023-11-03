<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao
{
  private $titulo;
  private $autor;
  private $totPaginas;
  private $pagAtual;
  private $aberto;
  private $leitor;

  // Método construtor 
  public function __construct($ti, $au, $tp, $le)
  {
    $this->titulo = $ti;
    $this->autor = $au;
    $this->totPaginas = $tp;
    $this->aberto = false;
    $this->pagAtual = 0;
    $this->leitor = $le;
  }

  // Métodos Publicos
  public function detalhes()
  {
    echo '<hr>';
    echo '<p>Livro ' . $this->titulo . ' escrito por ' . $this->autor . '<p/>';
    echo '<p>Páginas: ' . $this->totPaginas . ' Atual: ' . $this->pagAtual;
    echo '<br>Sendo lido por ' . $this->leitor->getNome();
  }
  public function abrir()
  {
    $this->aberto = true;
  }
  public function fechar()
  {
    $this->aberto = false;
  }
  public function folhear($p)
  {
    if ($p > $this->totPaginas) {
      $this->pagAtual = 0;
    } else {
      $this->pagAtual = $p;
    }
  }
  public function avancarPag()
  {
    $this->pagAtual++;
  }
  public function voltarPag()
  {
    $this->pagAtual--;
  }

  // Métodos Getters
  function getTitulo()
  {
    return $this->titulo;
  }
  function getAutor()
  {
    return $this->autor;
  }
  function getTotPaginas()
  {
    return $this->totPaginas;
  }
  function getPagAtual()
  {
    return $this->pagAtual;
  }
  function getAberto()
  {
    return $this->aberto;
  }
  function getLeitor()
  {
    return $this->leitor;
  }

  // Métodos Setters
  function setTitulo($ti)
  {
    $this->titulo - $ti;
  }
  function setAutor($au)
  {
    $this->autor = $au;
  }
  function setTotPaginas($tp)
  {
    $this->totPaginas = $tp;
  }
  function setPagAtual($pa)
  {
    $this->pagAtual = $pa;
  }
  function setAberto($ab)
  {
    $this->aberto = $ab;
  }
  function setLeitor($le)
  {
    $this->leitor = $le;
  }
}
