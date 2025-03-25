<?php
// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "root", "", "produtos");
if ($mysqli->connect_errno) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

$barcode = isset($_POST['barcode']) ? $mysqli->real_escape_string($_POST['barcode']) : '';
if (!$barcode) {
    die("Código inválido");
}

$checkQuery = "SELECT id FROM codes WHERE barcode = '$barcode' LIMIT 1";
$result = $mysqli->query($checkQuery);

if ($result && $result->num_rows > 0) {
    die("Erro: Código já registrado!");
}

$sql = "INSERT INTO codes (barcode) VALUES ('$barcode')";
if ($mysqli->query($sql)) {
    echo "Código salvo com sucesso!";
} else {
    echo "Erro ao salvar o código: " . $mysqli->error;
}
?>