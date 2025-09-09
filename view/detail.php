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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>