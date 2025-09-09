<?php
require_once "../model/model.php";

$planetModel = new ModelPlanet();

$id = $_GET['id'] ?? null;

$planet = null;
if ($id) {
    $planet = $planetModel->getById($id);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>View Planet</title>
</head>
<body>
    <h1>Data Planet</h1>

    <?php if ($planet): ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nama Planet</th>
                <th>Ciri-ciri Planet</th>
                <th>Planet ke-berapa</th>
            </tr>
            <tr>
                <td><?= $planet['id']; ?></td>
                <td><?= $planet['nama_planet']; ?></td>
                <td><?= $planet['ciri_ciri_planet']; ?></td>
                <td><?= $planet['planet_ke_berapa']; ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Tidak ada data planet dengan ID tersebut.</p>
    <?php endif; ?>
</body>
</html>
