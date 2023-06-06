<?php
    class Sequencia {
        private $valorInicial;
        private $valorFinal;
    
        public function __construct($valorInicial, $valorFinal) {
            $this->valorInicial = $valorInicial;
            $this->valorFinal = $valorFinal;
        }
    
        public function gerarSequencia($tipo) {
            $sequencia = [];
    
            if ($tipo == "todos") {
                for ($i = $this->valorInicial; $i <= $this->valorFinal; $i++) {
                    $sequencia[] = $i;
                }
            } elseif ($tipo == "impares") {
                for ($i = $this->valorInicial; $i <= $this->valorFinal; $i++) {
                    if ($i % 2 != 0) {
                        $sequencia[] = $i;
                    }
                }
            } elseif ($tipo == "pares") {
                for ($i = $this->valorInicial; $i <= $this->valorFinal; $i++) {
                    if ($i % 2 == 0) {
                        $sequencia[] = $i;
                    }
                }
            }
    
            return $sequencia;
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorInicial = $_POST["valor_inicial"];
        $valorFinal = $_POST["valor_final"];
        $tipoMostrar = $_POST["mostrar"];
    
        $sequencia = new Sequencia($valorInicial, $valorFinal);
        $resultado = $sequencia->gerarSequencia($tipoMostrar);
    
        echo "Sequência: ";
        foreach ($resultado as $valor) {
            echo $valor . " ";
        }
    }
    
?>