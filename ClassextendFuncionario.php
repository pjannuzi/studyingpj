<?php        
 
class Pessoa{
    public $nome;
    public $idade;

    protected function Acordar(){
        echo $this->nome." de ".$this->idade." acabou de acordar.<br>";
    }

}

Class Funcionario extends Pessoa {
    
    public function Rotina(){
        $this->Trabalhar();
        $this->Acordar();
    }
    
    private function Trabalhar(){
        echo $this->nome." está Trabalhando.<br>";
    }
}

$trabalhador = new Funcionario();
$trabalhador->nome = "Pedro";
$trabalhador->idade = 22;
$trabalhador->Rotina();


?>

