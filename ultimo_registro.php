<?php
header('Content-Type: application/json');

$mysqli = new mysqli("localhost", "root", "", "produtos");
if ($mysqli->connect_errno) {
    die(json_encode(['error' => $mysqli->connect_error]));
}

$sql = "SELECT * FROM codes WHERE nome IS NULL OR nome = '' ORDER BY created_at DESC LIMIT 1";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode([]);
}
?>
