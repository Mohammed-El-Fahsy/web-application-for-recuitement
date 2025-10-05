<?php
if (!isset($_GET['id'])) {
    die("ID manquant.");
}

$id = intval($_GET['id']);

$mysqli = new mysqli("localhost", "root", "", "avicenne");
if ($mysqli->connect_error) {
    die("Erreur DB : " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("SELECT cv2 FROM emploi WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cv2);

if ($stmt->fetch()) {
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"cv_$id\"");
    echo $cv2;
    exit;
} else {
    echo "❌ CV non trouvé.";
}
$stmt1 = $mysqli->prepare("SELECT cv FROM stage WHERE id = ?");
$stmt1->bind_param("i", $id);
$stmt1->execute();
$stmt1->store_result();
$stmt1->bind_result($cv);

if ($stmt1->fetch()) {
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"cv_$id\"");
    echo $cv;
    exit;
} else {
    echo "❌ CV non trouvé.";
}
?>