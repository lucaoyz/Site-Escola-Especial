<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$objetivo 	= $_REQUEST['txt_objetivo'];

$sql = "update tb_objetivo set 
					obj_texto = '$objetivo'
				where 
					obj_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_objetivo.php");
?>
