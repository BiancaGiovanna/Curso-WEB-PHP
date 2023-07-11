<?php
//Abstração 
class Funcionario
{
  // atributos
  public string $nome;
  public int $telefone;
  public float $salario;

  //setters
  function setFuncionario($nome, $telefone, $salario)
  {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->salario = $salario;
  }

  //getters
  function getFuncionario()
  {
    return $this->nome;
    return $this->telefone;
    return $this->salario;
  }

  //métodos 

  function resumirCadastroFuncionario()
  {
    return "$this->nome, seu numero de telefone é $this->telefone e possui um salário de R$$this->salario ";
  }
}

$funcionario1 = new Funcionario();

$funcionario1->setFuncionario('Bianca', 988776622, 2599.25);

echo $funcionario1->resumirCadastroFuncionario();
