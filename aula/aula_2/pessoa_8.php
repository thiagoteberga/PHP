<?
class Pessoa {
    private $nome;

    public function __construct () {
    	$this->nome = "Anonimous";
    }

    public function getNome() {
    	return $this->nome;
    }

    public function setNome($nome) {
    	$this->nome = $nome;
    }
}
?>
