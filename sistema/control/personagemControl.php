<?PHP
require_once(__DIR__.'/../model/personagem.php');
 require_once(__DIR__.'/../dao/personagemDAO.php');
class PersonagemControl {
   private $obj;
   private $dao;
   private $acao;
   public function __construct() {
       $this->obj=new Personagem();
       $this->dao=new PersonagemDAO();
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
            header("location: ../view/lista_personagem.php");
            exit();
            }

            else{
                if(isset($_REQUEST["id"])){
                $obj=$this->dao->buscarPorId($_REQUEST["id"]);
                require_once("../view/form_personagem.php");
                }
                
                }
          break;
      }
   }
   public function prepararObjeto() {
      $this->obj->setNome($_POST["nome"]);
	$this->obj->setFisico($_POST["fisico"]);
	$this->obj->setMental($_POST["mental"]);
	$this->obj->setGenero($_POST["genero"]);
	$this->obj->setVigor($_POST["vigor"]);
	$this->obj->setMana($_POST["mana"]);
	$this->obj->setId_conjunto($_POST["id_conjunto"]);
	$this->obj->setId_poder($_POST["id_poder"]);
	$this->obj->setId_raca($_POST["id_raca"]);
	
   }
}
new PersonagemControl;
?>