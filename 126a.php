<?php
    class quadrado {
        private $lado;

        public function __construct ($lado){
            $this-> $lado = $lado;
        }

        public function area() {
            return $this->lado * $this->lado;
        }
    }
    echo var_dump($quadrado);
?>