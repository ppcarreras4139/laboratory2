<?php

// Definición de la clase Empleado
class Empleado {
    // Propiedades
    private $nombre;
    private $sueldoBase;
    private $horasExtras;

    // Constructor para inicializar las propiedades
    public function __construct($nombre, $sueldoBase, $horasExtras) {
        $this->nombre = $nombre;
        $this->sueldoBase = $sueldoBase;
        $this->horasExtras = $horasExtras;
    }

    // Método para calcular el sueldo final
    public function calcularSueldo() {
        $sueldoFinal = $this->sueldoBase;

        // Calcular bonificación por horas extras
        if ($this->horasExtras > 5) {
            $bonoExtras = 0.10 * $this->sueldoBase * $this->horasExtras;
            $sueldoFinal += $bonoExtras;
        }

        // Calcular bonificación por sueldo base alto
        if ($this->sueldoBase > 2000) {
            $bonoSueldoAlto = 200;
            $sueldoFinal += $bonoSueldoAlto;
        }

        return $sueldoFinal;
    }

    // Método para mostrar el sueldo final
    public function mostrarSueldoFinal() {
        $sueldoFinal = $this->calcularSueldo();
        echo "Empleado: " . $this->nombre . "<br>";
        echo "Sueldo Base: $" . number_format($this->sueldoBase, 2) . "<br>";
        echo "Horas Extras: " . $this->horasExtras . "<br>";
        echo "Sueldo Final: $" . number_format($sueldoFinal, 2) . "<br>";
    }
}

// Crear una instancia de la clase Empleado
$empleado1 = new Empleado("Carlos Pérez", 2500, 6);

// Mostrar el sueldo final después de los cálculos
$empleado1->mostrarSueldoFinal();

//volvemos a empezar s

//aqui empezamos nuestra nueva linea

?>
