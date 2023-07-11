<?php
echo 'Ultilizando a tag padrão';
?>
<br>
<?=
'Ultilizando a tag impressão<br>';
?>

<?php
// Comando Print 
print 'print<br>';


// Variaveis
//String
$nome = 'Bianca ';
//int
$idade = 20;
//float
$peso = 58.9;
//boolean
$CNH_sn = false;

//Concatenação
$sobrenome = 'Gomes';
echo $nome . $sobrenome . '<br>';

//constantes
define('DB_URL', 'url_db');

echo DB_URL . '<br>';

//if else
$num1 = 10;

if ($num1 > 100) {
  echo 'sim<br>';
} else {
  echo 'não<br>';
}

//casting

//gettype() => retorna o tipo da variável
$valor = 10;
$valor2 = (float) $valor; //float, double ou real
$valor3 = (string) $valor;

echo $valor . ' ' . gettype($valor);
echo '<br />';
echo $valor2 . ' ' . gettype($valor2);
echo '<br />';
echo $valor3 . ' ' . gettype($valor3);

//converter de string para int
$valor4 = '22.12';
$valor5 = (int) $valor4;
echo '<br />';
echo $valor5 . ' ' . gettype($valor5) . '<br>';


//function

function exibirBoasVindas()
{
  echo "Bem-vindo ao curso de PHP! <br />";
}

exibirBoasVindas();

//return (com retorno)
function calcularAreaTerreno($largura, $comprimento)
{
  $area = $largura * $comprimento;
  return $area;
}

echo calcularAreaTerreno(5, 25);
echo '<br />';
echo calcularAreaTerreno(15, 125);
echo '<br />';
echo calcularAreaTerreno(50, 250);
echo '<br />';
echo calcularAreaTerreno(5, 30);
echo '<br />';

//atribuir a uma variavel
$resultado = calcularAreaTerreno(5, 25);
echo "O valor da variavel resultado é $resultado";
echo '<br />';

// funções nativas para string
$texto = 'curso completo de php';

//string to lower
echo $texto . '<br />';
echo strtolower($texto);
echo '<hr/>';

//string to upper
echo $texto . '<br />';
echo strtoupper($texto);
echo '<hr/>';

//upper case first
echo $texto . '<br />';
echo ucfirst($texto);
echo '<hr/>';

//string lenght
echo $texto . '<br />';
echo strlen($texto);
echo '<hr/>';

//string replace
echo $texto . '<br />';
echo str_replace('.', ',', '22.20'); // é case-sensitive
echo '<hr/>';

//string 
echo $texto . '<br />';
//'Curso Completo de PHP'
//0,1,2,3,4,5 ... 20
echo substr($texto, 0, 14) . '...';
echo '<hr/>';
echo '<br>';

// funções nativas para data

/* 
    //recuperacao da data atual ou data corrente

    // dia/mes/ano horas:minutos
    echo date('d/m/Y H:i');

    echo '<br />';
    echo date_default_timezone_get(); //está em Berlim
    date_default_timezone_set('America/Sao_Paulo'); //muda para Brasil
    echo '<br />';
    echo date('d/m/Y H:i');
    */

$data_inicial = '2018-04-24';
$data_final = '2018-05-15';

//timestamp
//01/01/1970 -- 2018-04-24 (js -> milissegundos / php -> segundos)
$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);
echo $data_inicial . ' - ' . $time_inicial;
echo '<br />';
echo $data_final . ' - ' . $time_final;

$diferenca_times = $time_final - $time_inicial;
echo '<br />';
echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;

$segundos_existem_dia = 24 * 60 * 60;
echo '<br />';
echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
echo '<br / >';
echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;
echo '<br / >';

//Array
echo '<hr / >';

$lista_nomes = ['Bianca', 'Giovanna', 'Andy'];
echo '<pre>';
var_dump($lista_nomes);
echo '</pre>';

echo '<hr>';


//Funções nativas para manipular Arrays
echo '<hr />';
//is_array -> verifica se o parâmetro passado é um array(true/false)
$array = array('notebook', 'teclado');
$retorno = is_array($array);

if ($retorno) {
  echo 'Sim, é um array';
} else {
  echo 'Não, é um array';
}

//array_keys -> retorna todas as chaves de um array, armazenando em um novo array
$array = [1 => 'a', 2 => 'b', 18 => 'c'];

echo '<pre>';
print_r($array);
echo '</pre>';

$chaves_array = array_keys($array);
echo '<pre>';
print_r($chaves_array);
echo '</pre>';

//sort -> ela ordena o nosso array e reajusta o indice
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

echo '<pre>';
print_r($array);
echo '</pre>';

sort($array); //true ou false

echo '<pre>';
print_r($array);
echo '</pre>';

//asort -> função análoga a sort, ordena um array preservando os indices
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

print_r($array);
echo '</pre>';

asort($array); //true ou false

echo '<pre>';
print_r($array);
echo '</pre>';

//count -> retorna um inteiro com a quantidade de elementos
$array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

echo '<pre>';
print_r($array);
echo count($array);
echo '</pre>';

//merge -> ela permite fundir vários arrays em um só
$array1 = ['osx', 'windows'];
$array2 = array('linux');
$array3 = ['solaris'];

$novo_array = array_merge($array1, $array2, $array3);
echo '<pre>';
print_r($novo_array);
echo '</pre>';

//explode -> Divide uma string baseada em um delimitador
$string = '26/04/2018';
$array_retorno = explode('/', $string);
echo '<pre>';
echo $string;
print_r($array_retorno);
echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
echo '</pre>';

//implode -> junta os elementos de um array em uma string
$array = ['a', 'b', 'x', 'y'];
$string_retorno = implode('-', $array);
echo $string_retorno;

//Percorrendo Arrays com While, Do While e For
$registros = array(
  array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
  array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
  array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
  array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
);

echo '<pre>';
print_r($registros);
echo '</pre>';
echo '<br /><br /><br />';
// $idx = 0;

//count -> conta a quantidade de elementos de array
echo 'O array possui ' . count($registros) . ' registros';

while ($idx < count($registros)) {
  echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
  echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

  echo '<hr />';

  $idx++;
}

do {
  echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
  echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

  echo '<hr />';

  $idx++;
} while ($idx < count($registros));

for ($idx = 0; $idx < count($registros); $idx++) {
  echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
  echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

  echo '<hr />';
}
echo '<hr />';

//Foreach em Arrays associativos e Foreach encadeados

$funcionarios = array(
  array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => "06/03/1970"),
  array('nome' => 'Maria', 'salario' => 3000),
  array('nome' => 'Júlia', 'salario' => 2200)
);

echo '<pre>';
print_r($funcionarios);
echo '</pre>';

foreach ($funcionarios as $idx => $nome_funcionario) {
  echo "ID {$idx} - Nome: {$nome_funcionario}  <br />";
}
foreach ($funcionarios as $idx => $nome_funcionario) {
  foreach ($nome_funcionario as $idx2 => $valor) {
    echo "$idx2 - $valor <br />";
  }
  echo "<hr />";
}
