<?PHP
require_once(__DIR__.'/../model/poder.php');
 require_once(__DIR__.'/../dao/poderDAO.php');
class PoderControl {
   private $obj;
   private $dao;
   private $acao;
   public function __construct() {
       $this->obj=new Poder();
       $this->dao=new PoderDAO();
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
            header("location: ../view/lista_poder.php");
            exit();
            }

            else{
                if(isset($_REQUEST["id"])){
                $obj=$this->dao->buscarPorId($_REQUEST["id"]);
                require_once("../view/form_poder.php");
                }
                
                }
          break;
      }
   }
   public function prepararObjeto() {
      $this->obj->setNome_poder($_POST["nome_poder"]);
	$this->obj->setCusto($_POST["custo"]);
	$this->obj->setTempo_espera($_POST["tempo_espera"]);
	$this->obj->setDescricao($_POST["descricao"]);
	$this->obj->setDuracao($_POST["duracao"]);
	$this->obj->setId_raca($_POST["id_raca"]);
	
   }
}
new PoderControl;
?>