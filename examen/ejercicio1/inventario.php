<?php

class Inventario
{
    private $id;
    private $nombre;
    private $precio;
    private $stock;
    private $categoria;
    private $estado;
    private $datosDeEntrada = [];



    //constructor
    public function __construct($id, $nombre, $categoria, $precio, $stock, $estado)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->estado = $estado;
        $this->datosDeEntrada = [
            ["id" => 1, "nombre" => "Portátil Gaming", "precio" => 1199.99, "stock" => 10, "categoria" => "Electrónica"],
            ["id" => 2, "nombre" => "Ratón Inalámbrico", "precio" => 45.50, "stock" => 3, "categoria" => "Electrónica"],
            ["id" => 3, "nombre" => "Teclado Mecánico", "precio" => 89.90, "stock" => 0, "categoria" => "Electrónica"],
            ["id" => 4, "nombre" => "Silla de Oficina", "precio" => 150.00, "stock" => 7, "categoria" => "Muebles"],
            ["id" => 5, "nombre" => "Cafetera Express", "precio" => 79.95, "stock" => 12, "categoria" => "Electrodomésticos"]
        ];
    }

    //metodos
    //getters

    //setters


    //insertar datos de array
    public function insertarDatos($datosDeEntrada)
    {
        foreach ($datosDeEntrada as $item) {
            $this->id = $item['0'];
            $this->nombre = $item[1];
            $this->precio = $item[2];
            $this->stock = $item[3];
            $this->categoria = $item[5];
        }
    }

    public function mostrarDatosTabla($datosDeEntrada)
    {
        echo "<tr>";
        echo "<td>" . $datosDeEntrada['id'] . "</td>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
</head>

<body>
    <h1>Panel de inventario</h1>
    <h1>Mostrar nombre</h1>

    <h3>Total de stock</h3>
    <!--funcion total de stock-->

    <h3>Categorias</h3>
    <!--funcion total de mostrar categorias-->

    <h1>tabla</h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Precio</td>
                <td>Stock</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
</body>

</html>