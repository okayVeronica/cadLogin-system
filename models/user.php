<?php
require_once 'models/database.php';

class user {
    //Função para escontrar o usuario pelo email
    public static function findByEmail($email){
        //Obiter conexão com o banco de dados para gardar-la em uma variável
        $conn = Database: :getConnection();

        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
        
        $stmt->execute(['email'] => $email);
        //Retorno de dados do usuário encontrado como um array associativo 
        return $stmt-> fetch(POD::FETCH-ASSOC);

        // Criar função que localiza usuário pelo ID
        public static function find($id){
            // Obtem a conexão com o banco de dados 
            $conn = Database: : getConnection();
            $stmt = $conn->prepare("SELCT * FROM usuario WHERE id = :id");
            $stmt->execute(['id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Função para criar o usuário na base de dados 
        public static function ($data){
            $conn = Detabase::gatConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        }

    }
}


?>