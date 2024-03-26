<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title><?= $titulo ?></title>
    </head>
    <body>
    <body>
        
        <?= view("partials/_form-error") ?>
        
        <form action="/dashboard/producto/update/<?= $categoria->id ?>" method="POST">
            <?= view("producto/_form", ['nombreBoton' => 'Actualizar']) ?>
        </form>
        
    </body>
</html>
