<?php
//Abstração 
echo 'Abstração<br>';
class Funcionario
{
  // atributos
  public string $nome;
  public string $cargo;
  public int $telefone;
  public float $salario;

  //setters
  function setFuncionario($nome, $cargo, $telefone, $salario)
  {
    $this->nome = $nome;
    $this->cargo = $cargo;
    $this->telefone = $telefone;
    $this->salario = $salario;
  }

  //getters
  function getFuncionario()
  {
    return $this->nome;
    return $this->cargo;
    return $this->telefone;
    return $this->salario;
  }

  //métodos 

  function resumirCadastroFuncionario()
  {
    return "Nome: $this->nome; <br>
            Cargo: $this->cargo;<br>
            Telefone: $this->telefone;<br>
            Salário: R$$this->salario;";
  }
}

$funcionario1 = new Funcionario();

$funcionario1->setFuncionario('Bianca', 'Analista', 988776622, 2599.25);

echo $funcionario1->resumirCadastroFuncionario();

echo '<hr>';

//Herança e porlimorfismo
class Veiculo
{
  public string $placa;
  public string $cor;


  function acelar()
  {
    echo 'Acelerar';
  }
  function freiar()
  {
    echo 'Freiar';
  }
  function trocarMarcha()
  {
    echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
  }
}

class Carro extends Veiculo
{
  function setCarro($placa, $cor)
  {
    $this->placa = $placa;
    $this->cor = $cor;
  }
  function getCarro()
  {
    $this->placa;
  }
}

class Moto extends Veiculo
{
  function setMoto($placa, $cor)
  {
    $this->placa = $placa;
    $this->cor = $cor;
  }
  function getMoto()
  {
    $this->placa;
  }
  function trocarMarcha()
  {
    echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
  }
}


$carro = new Carro();
$moto = new Moto();

$carro->setCarro('123ABC', 'Azul');
$moto->setMoto('123ABC', 'Azul');

echo '<pre>';
print_r($carro);
echo '</pre>';
$carro->acelar();
echo '<br>';
$carro->trocarMarcha();

echo '<pre>';
print_r($moto);
echo '</pre>';
$moto->acelar();
echo '<br>';
$moto->trocarMarcha();
echo '<hr>';

//Encapsulamento