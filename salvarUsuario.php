<?php 

include_once('Repository/UsuarioRepository.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarioiRepository = new UsuarioRepository();

$cadastrar = $usuarioiRepository->cadastrarUsuario($nome, $email, $senha);


if($cadastrar){
   echo 'Usuario cadastrado';
   }else{
       echo 'cadastro falhou';
   }
   echo "<pre>";
   
exit();

var_dump($cadastrar);


?>