<?php
    class Televisao {
        private $ligada;
        private $canal;
        private $volume;
    
        public function __construct() {
            $this->ligada = false;
            $this->canal = 3;
            $this->volume = 10;
        }
    
        public function ligar() {
            $this->ligada = true;
        }
    
        public function desligar() {
            $this->ligada = false;
        }
    
        public function aumentarCanal() {
            if ($this->ligada) {
                $this->canal++;
            }
        }
    
        public function diminuirCanal() {
            if ($this->ligada) {
                $this->canal--;
            }
        }
    
        public function aumentarVolume() {
            if ($this->ligada) {
                $this->volume++;
            }
        }
    
        public function diminuirVolume() {
            if ($this->ligada) {
                $this->volume--;
            }
        }
    
        public function getStatus() {
            $status = "Desligada";
            if ($this->ligada) {
                $status = "Ligada";
            }
    
            return "Status: " . $status . ", Canal: " . $this->canal . ", Volume: " . $this->volume;
        }
    }
    
?>
<?
//teste 
/*$televisao = new Televisao();
echo $televisao->getStatus() . "\n";  // Status: Desligada, Canal: 3, Volume: 10

$televisao->ligar();
$televisao->aumentarCanal();
$televisao->aumentarCanal();
$televisao->aumentarVolume();
echo $televisao->getStatus() . "\n";  // Status: Ligada, Canal: 5, Volume: 11

$televisao->diminuirCanal();
$televisao->diminuirVolume();
echo $televisao->getStatus() . "\n";  // Status: Ligada, Canal: 4, Volume: 10

$televisao->desligar();
echo $televisao->getStatus() . "\n";  // Status: Desligada, Canal: 4, Volume: 10*/
?>