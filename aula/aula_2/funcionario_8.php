<?

require 'pessoa_8.php';

class Funcionario extends Pessoa {
    private $id;

    public function getID() {
    	return $this->id;
    }

    public function setID($id) {
    	$this->id = $id;
    }
}
?>
