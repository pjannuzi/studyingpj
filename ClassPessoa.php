<?php        
 
class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." acabou de falar.";
    }
}

$sarah = new Pessoa();
$sarah->nome = "Sarah Goulart";
$sarah->idade = 20;
$sarah->Falar();


?>

