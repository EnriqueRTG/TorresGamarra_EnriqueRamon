<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?= $titulo ?></title>
        
        <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
        <script <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
