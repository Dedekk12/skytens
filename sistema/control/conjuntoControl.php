<?PHP
require_once(__DIR__.'/../model/conjunto.php');
 require_once(__DIR__.'/../dao/conjuntoDAO.php');
class ConjuntoControl {
   private $obj;
   private $dao;
   private $acao;
   public function __construct() {
       $this->obj=new Conjunto();
       $this->dao=new ConjuntoDAO();
       $this->acao=$_REQUEST["acao"] ?? null;
      $this->executaAcao();
   }
   public function executaAcao() {
   switch($this->acao) {s
          
          case 1:
          $this->prepararObjeto();
          $this->dao->inserir( $this->obj);
          break;
          
          case 2:
          return $this->dao->listar();
          
          case 3:
          $this->dao->excluir($_REQUEST["id"]);
          break;
          
          case 4:
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            $this->prepararObjeto();
            $this->dao->alterar($this->obj, $_POST["id"]);
            header("location: ../view/lista_conjunto.php");
            exit();
            }

            else{
                if(isset($_REQUEST["id"])){
                $obj=$this->dao->buscarPorId($_REQUEST["id"]);
                require_once("../view/form_conjunto.php");
                }
                
                }
          break;
      }
   }
   public function prepararObjeto() {
      $this->obj->setNome_conjunto($_POST["nome_conjunto"]);
	$this->obj->setArmadura($_POST["armadura"]);
	$this->obj->setArma($_POST["arma"]);
	$this->obj->setPocao($_POST["pocao"]);
	
   }
}
new ConjuntoControl;
?>