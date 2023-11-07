<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>

    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" name="valor" required class="form-control" id="valor" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="id_articulo" class="form-label">Id_Articulo</label>
        <input type="text" name="id_articulo" required class="form-control" id="id_articulo" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" required class="form-control" id="descripcion" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="caducidad" class="form-label">Caducidad</label>
        <input type="text" name="caducidad" required class="form-control" id="caducidad" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" name="categoria" required class="form-control" id="categoria" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="text" name="cantidad" required class="form-control" id="cantidad" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="merma" class="form-label">Merma</label>
        <input type="text" name="merma" required class="form-control" id="merma" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>