<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title><?= $subcategoria->nombre ?></title>
    </head>
    <body>
        <h1><?= $subcategoria->nombre ?></h1>
        <p><?= $subcategoria->nombre ?></p>
        <br>
        
        <h3>Categoria</h3>
        
        <?php foreach ($categorias as $categoria) : ?>
        
            <?php if($subcategoria->categoria_id == $categoria->id) : ?>
                <p><?= $categoria->nombre ?></p>
            <?php endif ?>
                
        <?php endforeach ?>
        
    </body>
</html>
