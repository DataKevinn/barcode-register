<?php
$mysqli = new mysqli("localhost", "root", "", "produtos");
if ($mysqli->connect_errno) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$nome = isset($_POST['nome']) ? $mysqli->real_escape_string($_POST['nome']) : '';
$quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 0;
$valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

if (!$id || !$nome || !$quantidade || !$valor) {
    die("Dados inválidos");
}

$sql = "UPDATE codes SET nome = '$nome', quantidade = $quantidade, valor = $valor WHERE id = $id";
if ($mysqli->query($sql)) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar registro: " . $mysqli->error;
}
?>
