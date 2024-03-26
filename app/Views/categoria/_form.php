<label for="title">Nombre Categoria</label>
<input type="input" name="nombre" 
       value="<?= old('nombre', $categoria->nombre) ?>"/>
<br>
<button type="submit"><?= $nombreBoton ?></button>