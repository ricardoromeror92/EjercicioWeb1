<?php
require_once("layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<h1 class="text-center">EDITAR</h1>
<div class="text-center">
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <input type="text" value="<?php echo $v['nombre_producto'] ?>" name="nombre"> <br>
        <input type="text" value="<?php echo $v['precio_producto'] ?>" name="precio"> <br>
        <input type="hidden" value="<?php echo $v['id_producto'] ?>" name="id"> <br>
        <input type="submit" class="btn btn-primary"  name="btn" value="ACTUALIZAR"> <br>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php
require_once("layouts/footer.php");