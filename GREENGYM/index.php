<?php
// Receber os dados do formulário
$dados filter_input_array(INPUT POST, FILTER DEFAULT);
// Acessar o If quando o usuário clicar no botão acessar do formulário
if(lempty($dados['SendLogin'])){ 
//var_dump($dados);

//recuperar os dados do usuário no banco de dados

$query_usuario = "SELECT id, nome, usuario, senha_usuario
                         FROM usuarios
                         WHERE usuario =:usuario
                         LIMIT 1"

//Preparar a QUERY

$result_usuario = $conn->prepare($query_usuario);

//Substituir o link da query pelo valor que vem do formulário
$result_usuario->bindParam(':usuario', $dados['usuario']);

//Executar a QUERY

$result_usuario->execute();

//Acessar o IF quando encontrar usuário no banco de dados
if (($result_usuario) and ($result_usuario->rowCount() !=0 )){
    //Ler os registros retorando do banco de dados
    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);

    //Acessar o IF quando a senha é válida
    if (password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])) {

        //salvar os dados do usuário na sessão
        $_SESSION['id'] = $row_usuario['id'];
        $_SESSION['usuario'] = $row_usuario['usuario'];

        //recuperar a data atual
    }
}






}

?>  

<!-- inicio do formulário de login -->
 <form method="POST" action="">
    <label>Usuário: </label>
    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>

    <label>Senha: </label>
    <input type="password" name="senha_usuario" placeholder="Digite a senha"><br><br>

</form>