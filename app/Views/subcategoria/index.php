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
        
        <a href="/dashboard/subcategoria/new">Crear</a>
            
        <table>
            <tr>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Opciones</td>
            </tr>
            
            <?php foreach ($subcategorias as $key => $subcategoria) : ?>
                <tr>
                    
                    <?php if ($subcategoria->baja != 1) : ?>
                        <td>
                            <?= $subcategoria->nombre ?>  
                        </td>
                        <td>
                            <?php foreach ($categorias as $key => $categoria) : ?>
                                <?php if ($subcategoria->categoria_id == $categoria->id) : ?>
                                    <?= $categoria->nombre ?>
                                <?php endif ?>
                            <?php endforeach ?>
                        </td>
                        <td>
                            <a href="/dashboard/subcategoria/<?= $subcategoria->id ?>">Ver</a>
                            <form action="/dashboard/subcategoria/delete/<?= $subcategoria->id ?>" method="POST">
                                <button type="submit">Eliminar</button>
                            </form>
                            <a href="/dashboard/subcategoria/edit/<?= $subcategoria->id ?>">Editar</a>
                        </td>
                    <?php endif ?>
                        
                </tr>
            <?php endforeach ?>
                
        </table>
        
        <ul>
            
        </ul>
        
    </body>
</html>
