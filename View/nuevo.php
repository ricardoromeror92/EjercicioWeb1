<?php
require_once("layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<div class="text-center">
<h1 class="text-center">NUEVO</h1>
<br><br>
<form action="" method="get">
    <input type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br>
    <input type="text" placeholder="INGRESE PRECIO:" name="precio"> <br><br>
    <input type="submit" class="btn btn-primary" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>

<?php
require_once("layouts/footer.php");