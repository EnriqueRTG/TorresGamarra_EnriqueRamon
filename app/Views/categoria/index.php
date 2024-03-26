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
        
        <a href="/dashboard/categoria/new">Crear</a>
            
        <table>
            <tr>
                <td>Nombre</td>
                <td>Opciones</td>
            </tr>
            <?php foreach ($categorias as $key => $categoria) : ?>
                <tr>
                    <?php if ($categoria->baja != 1) : ?>
                        <td>
                            <?= $categoria->nombre ?>  
                        </td>
                        <td>
                            <a href="/dashboard/categoria/<?= $categoria->id ?>">Ver</a>
                            <form action="/dashboard/categoria/delete/<?= $categoria->id ?>" method="POST">
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="/dashboard/categoria/edit/<?= $categoria->id ?>">Editar</a>
                        </td>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
        </table>
        
        <ul>
            
        </ul>
        
    </body>
</html>
