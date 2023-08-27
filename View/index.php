<?php
require_once("layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<div class="mb-3">
<h1 class="text-center">PRODUCTOS</h1>
    <div class="text-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td scope="col">NOMBRE</td>
                <td scope="col">PRECIO</td>
                <td scope="col">ACCIONES</td>           
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($dato)):
                    foreach($dato as $key => $value)
                        foreach($value as $v):?>
                        <tr>
                            <td><?php echo $v['nombre_producto'] ?> </td>
                            <td><?php echo $v['precio_producto'] ?> </td>
                            <td colspan="2">
                                <a class="btn btn-primary" role="button" href="index.php?m=editar&id=<?php echo $v['id_producto']?>">EDITAR</a>
                                <a class="btn btn-primary" role="button" href="index.php?m=eliminar&id=<?php echo $v['id_producto']?>" onclick="return confirm('Desea Eliminar el Registro'); false">ELIMINAR</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">NO HAY REGISTROS</td>
                    </tr>
                <?php endif ?>
            <tr>
                
                <td colspan="3" style="border: none;"><a class="btn btn-primary" href="index.php?m=nuevo" role="button" styel="margin: 20px;">Agregar</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php
require_once("layouts/footer.php");