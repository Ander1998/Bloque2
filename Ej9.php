<html>
    <body>
    <?php
    class Ejercicio9{
        public $lados = array();
        public $max = 5;

        public function rellenarRandom(){
            $numAleatorio = 0;
            for($x = 0; $x < $this->max; $x++){
                $numAleatorio = rand(-10, 10);
                $this->lados[$x] = $numAleatorio;
            }
        }

        public function calcularArea(){
            for($i = 0; $i < count($this->lados); $i++){
                $res = 0;
            try{
                if($this->lados[$i] < 0){
                    throw new Exception("!Es un número negativo¡" . nl2br("\n"));
                } else if($this->lados[$i] == 0) {
                    throw new Exception("0 no es ni un número negativo ni positivo" . nl2br("\n"));;
                }
                $res = pow($this->lados[$i], 4);
                echo $res . nl2br("\n");
            }catch (Exception $e){
                echo "Excepcion capturada: ", $e->getMessage(), "\n";
            }
            }
            
        }
    }
    $p1 = new Ejercicio9();
    $p1->rellenarRandom();
    $p1->calcularArea();


?>
</body>
</html>