<?php 
// Inclui o arquivo DatabaseConnection.php que contém a classe para conectar ao banco de dados
include_once('./DatabaseConnection.php');
// Define a classe UsuarioRepository
class UsuarioRepository {
    private DatabaseConnection $dataBaseConnection;
    private mysqli $conn;
    // Construtor da classe UsuarioRepository
    public function __construct(){
        $this->dataBaseConnection = new DatabaseConnection();
        $this->conn = $this->dataBaseConnection->getConnection();
 } 


     // Método para cadastrar um novo usuário no banco de dados
    public function cadastrarUsuario(
        string $nome,
        string $email, 
        string $senha,
    ):bool
    {
        // Cria a query SQL para inserir os dados do usuário na tabela cadastros
        $sql = "INSERT INTO cadastros (nome, email, senha)  VALUES  ('$nome', '$email', '$senha')";
        // Executa a query e retorna true se a inserção foi bem-sucedida ou false se falhou
        return $this->conn->query($sql);
    }



    private function teste(array $array){
        $sql = "SELECT * FROM   usuario WHERE 1 =1";

        foreach($array as $colum => $value){
            $sql .=" AND " . $colum . " = " . $value;
        }
    }


    // Método para editar um usuário existente no banco de dados
    public function editarUsuario(
        string $nome,
        string $email,
        string $senha,
        int $id): bool {
            $sql = "UPDATE usuarios
            SET nome = '$nome', email = '$email', senha = '$senha'
            WHERE id = '$id'";
            // Executa a query e retorna o resultado (true se bem-sucedido, false se falhar)
            return $this->conn->query($sql);

    }


    public function deletarUsuarios($id): bool{
        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        return $this->conn->query($sql);

    }







    




 
}



?>