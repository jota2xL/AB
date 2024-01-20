 <?php 
 //tienes que definir que vas a usar una sesion con sesionstar en un documento de php aunque ya que ya exista para poder modificarla
session_start();
if (isset($_SESSION)) {
   session_destroy();
} 
header("Location: ../index.php");
?>