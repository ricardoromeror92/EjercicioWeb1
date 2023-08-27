<?php
require_once("layouts/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<h1 class="text-center">VENTA</h1>
<form class="text-center" action="" method="get">

<label for="productos">PRODUCTO:</label>
<input type="text" id="productos" name="productos" list="lista-productos">
<datalist id="lista-productos">
    <?php
    if(!empty($dato)):
        
        foreach($dato as $key => $value)
            foreach($value as $v):
                $id = $v['id_producto'];
                $producto = $v['nombre_producto'];
                $precio = $v['precio_producto'];
                echo "<option value='$producto' data-id='$id' data-precio='$precio' data-producto='$producto'>";
            endforeach;
    endif;
    ?>
</datalist>
CANTIDAD:   <input type="text" placeholder="INGRESE CANTIDAD" name="cantidad" id="cantidad">
TOTAL:   <input type="text" placeholder="TOTAL" name="total" id="total"><br><br>
    <input name="id" id="id" type="hidden">
    <input type="submit" class="btn btn-primary" name="btn" value="GUARDAR"> <br><br>
    <input type="hidden" name="m" value="guardarVenta">
</form>


<h1 class="text-center">Historial de Ventas</h1>

<table class="table table-bordered">
        <thead>
            <tr>
                <td scope="col">Producto</td>
                <td scope="col">Cantidad</td>
                <td scope="col">Total</td>      
            </tr>
        </thead>
        <tbody>
            <?php
                $model = new Modelo();
                $deventas = $model->mostrarVentas("de_venta","");
                if(!empty($deventas)):
                    foreach($deventas as $key => $value)
                        foreach($value as $v):
                            $model = new Modelo();
                            $nombre = $model->mostrarProducto("ca_producto","id_producto=".$v['idproducto_venta']);
                            foreach($nombre as $key => $values)
                                foreach($values as $d):
                            ?>
                            
                        <tr>
                            <td><?php echo $d['nombre_producto'] ?> </td>
                            <td><?php echo $v['cantidad_venta'] ?> </td>
                            <td><?php echo $v['total_venta'] ?> </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">NO HAY REGISTROS</td>
                    </tr>
                <?php endif ?>
        </tbody>
    </table>

<script>
        var productosInput = document.getElementById("productos");
        var cantidadInput = document.getElementById("cantidad");
        var totalInput = document.getElementById("total");
        var idInput = document.getElementById("id");
        var porcentaje = 0.16;

        cantidadInput.addEventListener("blur", function() {
            var selectedOption = document.querySelector("#lista-productos option[value='" + productosInput.value + "']");
            var id = selectedOption.getAttribute("data-id");
            var precio = selectedOption.getAttribute("data-precio");
            var cantidad = cantidadInput.value;
            var totalPorciento = (precio*cantidad) * porcentaje;

            total =totalInput.value + ((precio*cantidad)+totalPorciento);

            totalInput.value = total;
            idInput.value = id;


        });
    </script>
</body>




