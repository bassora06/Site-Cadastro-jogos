<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
    include_once '../Model/crud.php';
    
 
    // filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra.
    //Remova todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
    
    $nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $genero= filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
    $id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $preco=filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    
    if((!$nome) || (!$genero) || (!$id) || (!$preco)){
        
         echo"<script language='javascript' type='text/javascript'>alert('Preencham todos os campos');window.location.href='../View/frm_contato.html';</script>";
         
    }else{
    $game = new crud();      
    $game->inserir_Game($nome,$genero,$id,$preco);
}
}


    
    
    
    

