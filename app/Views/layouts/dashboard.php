<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?= $titulo ?></title>
    </head>
    <body>
        
        <header>
            <h1>Modulo admin</h1>
        </header>
        <?= view('partials/_session') ?>
        
        <section>
            <?= $this->renderSection('contenido') ?>
        </section>
        
        <footer>
            Footer
        </footer>
        
    </body>
</html>
