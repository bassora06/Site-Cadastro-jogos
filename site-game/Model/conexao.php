<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'cliente');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    


}
