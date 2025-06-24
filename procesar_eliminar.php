<?php
include 'conexion.php';

if (isset($_POST['eliminar_ids']) && is_array($_POST['eliminar_ids'])) {
    $ids = $_POST['eliminar_ids'];
    $placeholders = implode(',', array_fill(0, count($ids), '?'));

    $stmt = $conn->prepare("DELETE FROM juegos WHERE id IN ($placeholders)");
    $stmt->execute($ids);
}

header("Location: eliminar.php");
exit;
?>
