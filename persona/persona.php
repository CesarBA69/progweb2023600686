<?php
class Persona {
    private $nombre;
    private $fecNac;
    private $telefono;

    public function __construct($nombre, $fecNac, $tel) {
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;  // Asignamos correctamente la fecha de nacimiento
        $this->telefono = $tel;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($value) {
        $this->nombre = $value;
    }

    public function getFecNac() {
        return $this->fecNac;  // Retornamos la fecha de nacimiento
    }

    public function setFecNac($value) {
        $this->fecNac = $value;
    }

    public function getTel() {
        return $this->telefono;
    }

    public function setTel($value) {
        $this->telefono = $value;
    }

    // Función para calcular la edad
    public function getEdad() {
        $fecha_nac = new DateTime($this->fecNac);  // Usamos fecNac
        $hoy = new DateTime();  // Fecha actual
        return $hoy->diff($fecha_nac)->y;  // Devuelve la edad en años
    }
}
?>
