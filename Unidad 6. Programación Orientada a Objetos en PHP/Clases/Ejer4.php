<?php
// Crea una clase llamada BaseCalc con dos propiedades num1 y num2. 
// Crea el método calculate() que muestra el valor de los dos números. 
// Por último crea las clases AddCalc, SubCalc, MulCalc y DivCalc que heredan de BaseCalc, 
// pero sobreescriben el método calculate() .
// Usa las diferentes clases y muestra los resultados de las diferentes operaciones.


// Clase base con dos propiedades y método de cálculo
class BaseCalc {
    protected $num1;
    protected $num2;

    // Constructor para inicializar las propiedades
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    // Método para mostrar los valores
    public function calculate() {
        echo ("Número 1: $this->num1, Número 2: $this->num2\n");
    }
}
// Clase para la suma, hereda de BaseCalc y sobreescribe calculate()
class AddCalc extends BaseCalc {
    public function calculate() {
        $result = $this->num1 + $this->num2;
        echo "La suma de $this->num1 y $this->num2 es: $result\n";
    }
}
// Clase para la resta, hereda de BaseCalc y sobreescribe calculate()
class SubCalc extends BaseCalc {
    public function calculate() {
        $result = $this->num1 - $this->num2;
        echo "La resta de $this->num1 y $this->num2 es: $result\n";
    }
}
// Clase para la multiplicación, hereda de BaseCalc y sobreescribe calculate()
class MulCalc extends BaseCalc {
    public function calculate() {
        $result = $this->num1 * $this->num2;
        echo ("La multiplicación de $this->num1 y $this->num2 es: $result\n");
    }
}
// Clase para la división, hereda de BaseCalc y sobreescribe calculate()
class DivCalc extends BaseCalc {
    public function calculate() {
        if ($this->num2 != 0) {
            $result = $this->num1 / $this->num2;
            echo "La división de $this->num1 entre $this->num2 es: $result\n";
        } else {
            echo ("Error: División por cero no permitida.\n");
        }
    }
}
// Ejemplo de uso
$numero1 = 10;
$numero2 = 5;

// Crear instancias de cada clase y mostrar resultados
$sum = new AddCalc($numero1, $numero2);
$sum->calculate();

$sub = new SubCalc($numero1, $numero2);
$sub->calculate();

$mul = new MulCalc($numero1, $numero2);
$mul->calculate();

$div = new DivCalc($numero1, $numero2);
$div->calculate();
?>
