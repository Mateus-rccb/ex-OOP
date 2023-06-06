<?php
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    $retangulo = new Retangulo($largura, $altura);
    $area = $retangulo->calcularArea();

    echo "A área do retângulo é: " . $area . " cm quadrados";
}
?>
