<?php 
 include_once('head.php');
 ?>

    <form action="salvarUsuario.php" method="post">

    <label for="">Nome</label>
    <input type="text" name="nome" id="">

    
    <label for="">Email</label>
    <input type="email" name="email" id="">
    

    <label for="">Senha</label>
    <input type="password" name="senha" id="">
   

    <button type="submit ">Enviar </button>
    
    </form>

<?php 
 include_once('footer.php');
?>