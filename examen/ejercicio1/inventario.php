<?php
class Producto {
    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $stock;

    public function __construct($id, $nombre, $categoria, $precio, $stock) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getCategoria() { return $this->categoria; }
    public function getPrecio() { return $this->precio; }
    public function getStock() { return $this->stock; }

    public function getEstado() {
        if ($this->stock == 0) {
            return "Agotado";
        } elseif ($this->stock <= 3) {
            return "Stock bajo";
        } else {
            return "Disponible";
        }
    }
}

class Inventario {
    private $productos = [];

    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }

    public function getProductos() {
        return $this->productos;
    }
    //productos disponibles
    public function obtenerProductosDisponibles() {
        return array_filter($this->productos, function($p) {
            return $p->getStock() > 0;
        });
    }   
    //total stock
    public function calcularValorTotalStock() {
        $total = 0;
        foreach ($this->productos as $p) {
            $total += $p->getPrecio() * $p->getStock();
        }
        return $total;
    }
    //buscar p x id
    public function buscarProductoPorId($id) {
        foreach ($this->productos as $p) {
            if ($p->getId() == $id) {
                return $p;
            }
        }
        return null;
    }
    //ob nombres p
    public function obtenerNombresProductos() {
        return array_map(function($p) {
            return $p->getNombre();
        }, $this->productos);
    }
    //no duplicados
    public function obtenerCategoriasUnicas() {
        $categorias = array_map(function($p) {
            return $p->getCategoria();
        }, $this->productos);
        return array_unique($categorias);
    }
}

$inventario = new Inventario();
$inventario->agregarProducto(new Producto(1, "Portátil Gaming", "Electrónica", 1199.99, 10));
$inventario->agregarProducto(new Producto(1, "Ratón Inalámbrico", "Electrónica", 45.50, 3));
$inventario->agregarProducto(new Producto(3, "Teclado Mecánico", "Electrónica", 89.90, 0));
$inventario->agregarProducto(new Producto(2, "Silla de Oficina", "Muebles", 150.00, 7));
$inventario->agregarProducto(new Producto(4, "Cafetera Express", "Electrodomésticos", 79.90, 12));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Inventario</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Panel de Inventario</h2>

    <p><strong>Total Stock:</strong> <?php echo number_format($inventario->calcularValorTotalStock(), 2, ',', '.'); ?> €</p>
    <p><strong>Categorías:</strong> <?php echo implode(', ', $inventario->obtenerCategoriasUnicas()); ?></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventario->getProductos() as $producto): ?>
            <tr>
                <td><?php echo $producto->getId(); ?></td>
                <td><?php echo $producto->getNombre(); ?></td>
                <td><?php echo $producto->getCategoria(); ?></td>
                <td><?php echo number_format($producto->getPrecio(), 2, ',', '.'); ?> €</td>
                <td><?php echo $producto->getStock(); ?></td>
                <td><?php echo $producto->getEstado(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>