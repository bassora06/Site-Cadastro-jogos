<?php

if ( isset($_POST['botao']) ){
    
 include_once '../Model/crud.php' ;   
 
 
 $nome= $_POST["nome"];
 $genero = $_POST["genero"];
 $id = $_POST["id"];
 $preco = $_POST["preco"];

$inserir = new crud();

$inserir->inserir_Game($nome,$genero,$id,$preco); 
 
 
}


    
    
    
    

