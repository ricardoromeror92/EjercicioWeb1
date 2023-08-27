<?php
require_once("Model/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("ca_producto","1");
        require_once("View/index.php");
    }

    //nuevo
    static function nuevo(){        
        require_once("View/nuevo.php");
    }

    //venta
    static function venta(){   
        $producto   = new Modelo();
        $dato       =  $producto->mostrar("ca_producto","1");  
        $ventas     =  $producto->mostrar("de_venta","1");  
        require_once("View/venta.php");
    }
    //guardar
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data = "'".$nombre."',".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("ca_producto",$data);
        header("location:".urlsite);
    }

    //guardarVenta
    static function guardarVenta(){
        $id= $_REQUEST['id'];
        $cantidad= $_REQUEST['cantidad'];
        $total = $_REQUEST['total'];
        $data = $id.",".$cantidad.",".$total;
        $producto = new Modelo();
        $dato = $producto->insertarVenta("de_venta",$data);
        header("location:".urlsite);
    }



    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("ca_producto","id_producto=".$id);        
        require_once("View/editar.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $nombre= $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data = "nombre_producto='".$nombre."',precio_producto=".$precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("ca_producto",$data,"id_producto=".$id);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("ca_producto","id_producto=".$id);
        header("location:".urlsite);
    }


}