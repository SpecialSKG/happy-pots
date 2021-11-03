<form action="<?= base_url("/Product/insertar_producto")?>" method="post" enctype="multipart/form-data" class="d-flex flex-column" >
    <input type="text"  required placeholder="nombre" name="nombre" id="nombre">
    <input type="text"  required placeholder="descripcion"name="descripcion" id="descripcion">
    <input type="text"  required placeholder="precio"name="precio" id="precio">
    <input type="file"  required name="img" id="img">
    <input type="submit" value="guardar">

</form>