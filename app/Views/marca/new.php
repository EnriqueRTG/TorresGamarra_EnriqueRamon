<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('contenido') ?>

    <?= view("partials/_form-error") ?>

    <form action="create" method="POST">
        <?= view("marca/_form", ['nombreBoton' => 'Crear']) ?>
    </form>

<?= $this->endSection() ?>

