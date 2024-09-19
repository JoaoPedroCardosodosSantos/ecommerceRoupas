<?php
$user_name = $_POST['user_name'];
$primeiro_nome = $_POST['primeiro_nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['flexRadioDefault'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$consfirma_senha = $_POST['confirma_senha'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$complemento = $_POST['complemento'];
$termos = $_POST['termos'];

if($senha == $consfirma_senha){
    if($termos) {
        # ============== Tabelas e colunas ====== 
        $tabela = "Cliente";
        $colunas = "Nome, Telefone, CPF, Email, Numero_residencial, Complemento, Obs";

        $valores = $user_name, $primeiro_nome, $email, $senha, $sexo, $sobrenome, $telefone, $rua, $numero, $cidade, $cep, $uf, $complemento, $termos; # Só arruama a ordem

        $conexao = new Conexao();
        $conexao->insereCliente($tabela, $colunas, $valores);
    }else {
        echo "<script>alert('Termos de uso não preenchidos');</script>";
    }
}else {
    echo "<script>alert('Senha incompativel, digite a mesma senha duas vezes !');</script>";
}

?>