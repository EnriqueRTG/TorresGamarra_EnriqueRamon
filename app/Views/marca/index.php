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
        
        <?= view('partials/_session') ?>
        
        <h1><?= $titulo ?></h1>
        
        <a href="/dashboard/marca/new">Crear</a>
            
        <table>
            <tr>
                <td>Nombre</td>
                <td>Opciones</td>
            </tr>
            <?php foreach ($marcas as $key => $marca) : ?>
                <tr>
                    <?php if ($marca->baja != 1) : ?>
                        <td>
                            <?= $marca->nombre ?>  
                        </td>
                        <td>
                            <a href="/dashboard/marca/<?= $marca->id ?>">Ver</a>
                            <form action="/dashboard/marca/delete/<?= $marca->id ?>" method="POST">
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="/dashboard/marca/edit/<?= $marca->id ?>">Editar</a>
                        </td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
        </table>
        
        <ul>
            
        </ul>
        
    </body>
</html>
