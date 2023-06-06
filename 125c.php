<?php
    class Aeroporto {
        private $nome;
        private $cidade;
    
        public function getNome() {
            return $this->nome;
        }
    
        public function setNome(string $nome) {
            $this->nome = $nome;
        }
    
        public function getCidade() {
            return $this->cidade;
        }
    
        public function setCidade(string $cidade) {
            $this->cidade = $cidade;
        }
    }
    
    /* Exemplo de uso:
    $aeroporto = new Aeroporto();
    $aeroporto->setNome("Aeroporto Internacional");
    $aeroporto->setCidade("São Paulo");
    
    echo "Nome do Aeroporto: " . $aeroporto->getNome() . "\n";
    echo "Cidade do Aeroporto: " . $aeroporto->getCidade() . "\n";
    */
?>