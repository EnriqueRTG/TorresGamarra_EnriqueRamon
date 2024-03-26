<label>Codigo SKU: 
    <input type="text" name="codigo_SKU" value="<?= old('codigo_SKU', $producto->codigo_SKU) ?>"/>
</label>
<br>

<label>Nombre del Producto: 
    <input type="text" name="nombre" value="<?= old('nombre', $producto->nombre) ?>"/>
</label>
<br>

<label>Descripcion: 
    <textarea name="descripcion" rows="3" cols="20"><?= old('descripcion', $producto->descripcion) ?></textarea>
</label>
<br>

<label>Precio: 
    <input type="number" name="precio" value="<?= old('precio', $producto->precio) ?>"/>
</label>
<br>

<label>Stock: 
    <input type="number" name="stock" value="<?= old('stock', $producto->stock) ?>"/>
</label>
<br>

<label>Marca: 
    <input type="text" name="marca_id" value="<?= old('marca_id', $producto->marca_id) ?>"/>
</label>
<br>

<label>Subcategoria: 
    <input type="text" name="subcategoria_id" value="<?= old('subcategoria_id', $producto->subcategoria_id) ?>"/>
</label>

<br>

<label>Peso: 
    <input type="text" name="peso" value="<?= old('peso', $producto->peso) ?>"/>
</label>
<br>

<label>Dimensiones: 
    <input type="text" name="dimension" value="<?= old('dimension', $producto->dimension) ?>"/>
</label>
<br>

<label>Imagen: 
    <input type="text" name="imagen" value="<?= old('imagen', $producto->imagen) ?>"/>
</label>
<br>

<button type="submit"><?= $nombreBoton ?></button>