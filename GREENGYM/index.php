<?php
// Receber os dados do formulário
$dados filter_input_array(INPUT POST, FILTER DEFAULT);
// Acessar o If quando o usuário clicar no botão acessar do formulário
if(lempty($dados['SendLogin'])){ 
var_dump($dados);
}

?>  

<!-- inicio do formulário de login -->
 <form method="POST" action="">
    <label>Usuário: </label>
    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>

    <label>Senha: </label>
    <input type="password" name="senha_usuario" placeholder="Digite a senha"><br><br>

</form>