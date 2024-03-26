<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title><?= $producto->nombre ?></title>
    </head>
    <body>
        
        <h1><?= $producto->nombre ?></h1>
        
        <h3>Detalles del Producto</h3>
        
        <p>Codigo SKU: <?= $producto->codigo_SKU ?></p>
        <br>
            
        <p>Nombre: <?= $producto->nombre ?></p>
        <br>
        
        <p>Descripcion: <?= $producto->descripcion ?></p>
        <br>
        
        <p>Precio: $<?= $producto->precio ?></p>
        <br>

        <p>Marca: <?= $producto->marca ?></p>
        <br>
    
        <p>Subcategoria: <?= $producto->subcategoria ?></p>
        <br>
                
        <p>Categoria: <?= $producto->categoria ?></p>
        <br>
        
        <p>Presentacion: <?= $producto->peso ?></p>
        <br>
        
        <p>Dimensiones: <?= $producto->dimension ?></p>
        <br>

    </body>
</html>
