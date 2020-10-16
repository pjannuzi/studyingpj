<?php        
 
class Pessoa {
    const nome = "Pedro";

    public function exibirNome() {
        echo self::nome;
    }
}

class Pedro extends Pessoa {
    const nome = "Jannuzi";

    public function exibirNome(){
        echo parent::nome;
    }
}

$pessoa = new Pedro();
$pessoa->ExibirNome();

?>

