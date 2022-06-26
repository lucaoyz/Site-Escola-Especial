<?PHP

require_once('../conexao/banco.php');

$objetivo 	= $_REQUEST['txt_objetivo'];

$sql = "insert into tb_objetivo (obj_texto) 
								values ('$objetivo')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_objetivo.php");

?>



