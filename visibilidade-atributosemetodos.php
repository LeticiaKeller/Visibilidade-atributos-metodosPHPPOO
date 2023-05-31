<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>ERRO! Não é possivel raviscar pois a caneta esta tampada.</p>";
            }
            else{
                echo "<p>Estou rabiscando...</p>";
            }
        }

        //Por esse método ser público ele da acesso a uma variável privado, como é o caso de $tampada
        public function tampar(){
            $this->tampada= true;
        }
        public function destampar(){
            $this->tampada= false;
        }
    }
     
    ?>