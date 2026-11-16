<?php 
class Persona {
    private $DNI;
    private $nombre;
    private $email;

    public function __construct($DNI, $nombre, $email) {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    //geters
    public function getDNI() {
        return $this->DNI;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getEmail() {
        return $this->email;    
    }

    //setters
    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    //mostrar datos
    public function mostrarDatos() {
        echo "DNI: " . $this->DNI . " - " . "Nombre: " . $this->nombre . " - " . "Email: " . $this->email;
    }
}

class Estudiante extends Persona {
    private $numExpediente;

    public function __construct($DNI, $nombre, $email, $numExpediente) {
        parent::__construct($DNI, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }

    public function getNumExpediente() {
        return $this->numExpediente;
    }
    public function setNumExpediente($numExpediente) {
        $this->numExpediente = $numExpediente;
    }

    //mostrar datos
    public function mostrarDatos() {
        parent::mostrarDatos();
        echo " - Nº expediente: " . $this->numExpediente;
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <h1>Clases</h1>
    <?php
    $persona = new Persona("123456789", "Esther", "e@gmail.com");
    echo "<p> Persona 1: </p>";
    $persona->mostrarDatos();
    $estudiante = new Estudiante("1234567", "pepe", "pepe@gmail.com", "1");
    echo "<p> Estudiante : </p>";
    $estudiante->mostrarDatos();
    $persona->setNombre("Esther2");
    echo "<p> Persona 1 modifiada</p>";
    $persona->mostrarDatos();
    ?>
</body>
</html>