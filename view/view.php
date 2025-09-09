<?php
require_once "../model/model.php";

$planetModel = new ModelPlanet();
$planets = $planetModel->getAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>View Planet</title>
</head>
<body>
    <h1>Data Planet</h1>

    <?php if (count($planets) > 0): ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Nama Planet</th>
                <th>Ciri-ciri Planet</th>
                <th>Planet ke-berapa</th>
            </tr>
            <?php foreach ($planets as $p): ?>
            <tr>
                <td><?= $p['id']; ?></td>
                <td><?= $p['nama_planet']; ?></td>
                <td><?= $p['ciri_ciri_planet']; ?></td>
                <td><?= $p['planet_ke_berapa']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data planet.</p>
    <?php endif; ?>
</body>
</html>
