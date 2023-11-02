<?php  
      
if ( isset($_POST['botao']) ){
    
 include_once '../Model/crud.php' ;   

$id= $_POST['id'];


$excluir = new crud();

$excluir->excluir_Game($id);
}      