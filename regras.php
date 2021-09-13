<?php


class Pessoa{

	private $nome;
	private $idade;
	private $altura;
	private $peso;
	
	public function __get($atributo) {
			return $this->$atributo;
		}
	public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

	public function calcularIMC() {


	}	
}

$pessoa = new Pessoa();
$pessoa->__set('nome', $_POST['nome']);
$pessoa->__set('idade', $_POST['idade']);
$pessoa->__set('altura', $_POST['altura']);
$pessoa->__set('peso', $_POST['peso']);
$nome = $pessoa->__get('nome');
$idade = $pessoa->__get('idade');
$altura = $pessoa->__get('altura');
$peso = $pessoa->__get('peso');

	

$tipo1 = 'peso muito baixo, isso é grave';
$tipo2 =	'peso baixo, isso é grave';
$tipo3 =	'peso baixo'; 
$tipo4 =	'peso normal';
$tipo5 =	'Sobrepeso';
$tipo6 =	'Obesidade grau I'; 
$tipo7 =	'Obesidade grau II'; 
$tipo8 =	'Obesidade grau III';
$msgtipo1 = 'Você está com o peso muito baixo, mantenha uma boa alimentação e procure um especialista assim que possível!';
$msgtipo2 = 'Você está com o peso muito baixo, mantenha uma boa alimentação, atividasdes físicas e procure um especialista!';
$msgtipo3 = 'Você está com o peso baixo, mantenha uma boa alimentação e atividades físicas!';
$msgtipo4 = 'Você está com um peso muito bom, continue mantendo seu ritmo alimentar e suas atividades físicas!';
$msgtipo5 = 'Você está com sobrepeso, fique atendo, pois se você não se cuidar evoluirá para Obesidade grau I, cuidado!';
$msgtipo6 = 'Você está com o peso acima do normal, controle sua alimentação e foque nas atividades físicas. Só você pode fazer a diferença na sua saúde!';
$msgtipo7 = 'Você está com o peso acima do normal, controle sua alimentação e foque nas atividades físicas. Só você pode fazer a diferença na sua saúde!';
$msgtipo8 = 'Você está com o peso acima do normal, controle sua alimentação e procure um especialista assim que possível!'; 

$altura = floatval($altura);
$peso = floatval($peso);
$idade = intval($idade);

try{

$altura = ($altura / 100);
$m = ($peso / ($altura * $altura)); 
$m = number_format($m);

}catch(Error $e){

	header('Location: index.php?erro=2');
}



?>