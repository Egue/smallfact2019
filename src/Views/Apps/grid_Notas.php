

<br>
<br>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Notas</th>
        <th>Acción</th>
    </thead>
    <tbody>
        <?php
        require_once("src/Controllers/NotasController.php");
        $obj_grid = new NotasController();
        $obj_grid->allNotas();
        
        ?>
    </tbody>
</table>