<?php

require "conexao.php";

 session_start(); 

class crud {   
     
 function inserir_Usuario($email,$nome,$endereco,$telefone,$senha){ //função de cadastro
     
    $conn= conectar();      
    
    
    $pegaEmail = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email'");	
	
    if(mysqli_num_rows($pegaEmail) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/frm_contato.html';</script>";
	

   }else{

  $sql = "INSERT INTO usuario (email,nome,endereco,telefone,senha) values('$email','$nome','$endereco','$telefone','$senha')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/frm_logar.html';</script>";
   
   }
 }
 
   function inserir_Game($nome,$genero,$id,$preco){
     
    $conn= conectar();      
    
    
    $pegaId = mysqli_query($conn, "SELECT * FROM game WHERE id = '$id'");	
	
    if(mysqli_num_rows($pegaId) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Id já existe');window.location.href='../View/frm_jogo.php';</script>"; //
	

   }else{

  $sql = "INSERT INTO game (nome,genero,id,preco) values('$nome','$genero',$id,$preco)";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('jogo cadastrado com sucesso');window.location.href='../View/frm_jogo.php';</script>"; //
   
   }
 }
 
   function selecionar_Usuario($email,$senha){ //função de login
       
   
        $conn= conectar();         
 
        $result_usuario = "SELECT * FROM usuario  WHERE email= '$email' && senha = '$senha' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioEmail'] = $resultado['email'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];  

            header("Location: ../View/frm_perfil_usuario.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/frm_logar.html';</script>";
         
        }
    

  }
  
 
	public function excluir_Game ($id){

    $conn= conectar();   
    
    $cod_game= mysqli_query($conn, "SELECT * FROM game WHERE id = '$id'");	
    
    if(mysqli_num_rows($cod_game) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/frm_exluir_jogo.php';</script>";
    }
           else{	
    
                  $result_game = "DELETE FROM game WHERE id = '$id'";
                  
                  mysqli_query($conn, $result_game);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Excluído com sucesso');window.location.href='../View/frm_exluir_jogo.php';</script>";
                     
              }else{
                  
                  header("Location:../view/excluir_jogo.php");
                   
                  
              }
    }
  
    
   }


   public function alterar_game($nome, $genero,$id ,$preco){

    $conn= conectar(); 
    
  	$pegaid_game = mysqli_query($conn, "SELECT * FROM game WHERE id = '$id'");
	

         if(mysqli_num_rows($pegaid_game) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este id NÃO esta cadastrado em nossos registros');window.location.href='../View/frm_alterar.php'</script>";

	      }else{		

		
          $result_game = "UPDATE game SET nome = '$nome', genero = '$genero' , preco = '$preco' WHERE id = '$id'";

         mysqli_query($conn,$result_game);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('informações do jogo alterado com sucesso!');window.location.href='../View/frm_alterar.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este jogo');window.location.href='../View/frm_alterar.php'</script>";
                     
                  
                     
              }


        }




   }


   }
  

  


