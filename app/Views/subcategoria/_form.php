<label for="title">Nombre Subcategoria</label>
<input type="input" name="nombre" 
       value="<?= old('nombre', $subcategoria->nombre) ?>"/>

<br>

<select name="categoria_id">
    <?php foreach ($categorias as $categoria) : ?>
    
        <?php if ($subcategoria->categoria_id == $categoria->id) : ?>
            <option value="<?= $categoria->id ?>" selected>
                <?php echo $categoria->nombre ; ?>
            </option>
        <?php endif ?>

        <?php if ($categoria->baja != 1 & $subcategoria->categoria_id != $categoria->id) : ?>
            <option value="<?= $categoria->id ?>">
                <?php echo $categoria->nombre ; ?>
            </option>
        <?php endif ?>

    <?php endforeach ?>
</select>

<br>

<button type="submit"><?= $nombreBoton ?></button>