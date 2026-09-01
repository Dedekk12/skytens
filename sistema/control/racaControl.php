<?PHP
require_once(__DIR__.'/../model/raca.php');
 require_once(__DIR__.'/../dao/racaDAO.php');
class RacaControl {
   private $obj;
   private $dao;
   private $acao;
   public function __construct() {
       $this->obj=new Raca();
       $this->dao=new RacaDAO();
       $this->acao=$_REQUEST["acao"] ?? null;
      $this->executaAcao();
   }
   public function executaAcao() {
   switch($this->acao) {
          
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
            header("location: ../view/lista_raca.php");
            exit();
            }

            else{
                if(isset($_REQUEST["id"])){
                $obj=$this->dao->buscarPorId($_REQUEST["id"]);
                require_once("../view/form_raca.php");
                }
                
                }
          break;
      }
   }
   public function prepararObjeto() {
      $this->obj->setNome_raca($_POST["nome_raca"]);
	$this->obj->setHabilidade($_POST["habilidade"]);
	$this->obj->setBonus_incial($_POST["bonus_incial"]);
	
   }
}
new RacaControl;
?>