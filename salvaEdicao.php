<h1>Salvar Edição</h1>

<?php
    include_once("Repository/UsuarioRepository.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $id = $_POST["id"];

    $usuarioRepository = new UsuarioRepository;
    $recadastra = $usuarioRepository->editarUsuario($nome,$email,$senha,$id);

    
    if($recadastrar){
        echo  "<script> alert('Editado com sucesso');</script>";
        echo "<script>location.href='?page=listar';</script>"; 
       }else{
           echo "<script> alert('Ops! Ocorreu algum erro');</script>";
           echo "<script>location.href='?page=listar';</script>";
       }
       echo "<pre>";
       
        exit();


?>