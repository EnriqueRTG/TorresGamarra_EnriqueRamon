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
        
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../../../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
       
    </head>
    <body class="container">
        <?= view('partials/_session') ?>
        
        <h1 class="py-5"><?= $titulo ?></h1>
        
        <a class="btn btn-success" href="/dashboard/producto/new">Crear</a>
            
        <table class="table-secondary">
            <tr>
                <td class="p-5">Codigo SKU</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Stock</td>
                <td>Marca</td>
                <td>Peso</td>
                <td>Dimension</td>
                <td>Opciones</td>
            </tr>
            
            <?php foreach ($productos as $key => $producto) : ?>
                <tr>
                    
                    <?php if ($producto->baja != 1) : ?>
                        <td>
                            <?= $producto->codigo_SKU ?>  
                        </td>
                        <td>
                            <?= $producto->nombre ?>  
                        </td>
                        <td>
                            <?= $producto->descripcion ?>  
                        </td>
                        <td>
                            <?= $producto->precio ?>  
                        </td>
                        <td>
                            <?= $producto->stock ?>  
                        </td>
                        <td>
                            <?= $producto->marca_id ?>  
                        </td>
                        <td>
                            <?= $producto->peso ?>  
                        </td>
                        <td>
                            <?= $producto->dimension ?>  
                        </td>
                        
                        <td>
                            <a class="btn btn-primary" href="/dashboard/producto/<?= $producto->id ?>">Ver</a>
                            <form action="/dashboard/producto/delete/<?= $producto->id ?>" method="POST">
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                            <a class="btn btn-dark" href="/dashboard/producto/edit/<?= $producto->id ?>">Editar</a>
                        </td>
                    <?php endif ?>
                        
                </tr>
            <?php endforeach ?>
                
        </table>
                

    </body>
</html>
