<?php 
declare( strict_types = 1);

include 'includes/header.php';

// Metodos estaticos

class Producto {

    public static $imagen = "Imagen.jpg";
    public static $imagenPlaceholder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
      if($imagen) {
        self::$imagenPlaceholder = $imagen;
      }
    }

    public static function obtenerImagenProducto() {
      return self::$imagen;
    }

    public function mostrarProducto() : void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

}
echo Producto::obtenerImagenProducto();

$producto = new Producto('Tablet', 200, true, '');
// $producto->mostrarProducto();

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true, 'MonitorCurvo.jpg');
// $producto2->mostrarProducto();

echo $producto2->getNombre();

echo $producto->obtenerImagenProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';