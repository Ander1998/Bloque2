<html>
    <body>
    <?php  
    class Persona{
        private $dni;
        private $nombre;
        private $apellido;

            public function __construct($dni, $nombre, $apellido){
                $this->dni = $dni;
                $this->nombre = $nombre;
                $this->apellido = $apellido;
            }

            public function unirPalabra(){
                $letra = " ";
                $letra = "Persona: " . $this->nombre . "\n" .$this->apellido . nl2br("\n");
                return $letra;
            }


            public function setDni($dni){
                $this->dni = $dni;
            }

            public function getDni(){
                return $this->dni;
            }

            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            public function getNombre(){
                return $this->nombre;
            }

            public function setApellido($apellido){
                $this->apellido = $apellido;
            }

            public function getApellido(){
                return $this->apellido;
            }

}
    $p1 = new Persona("32516881S", "Ramos", "Ander");
    echo $p1->unirPalabra();

    $p2 = new Persona("73031633D", "Ander", "Ramos");
    echo $p2->unirPalabra();
    
    class User extends Persona{
        private $puntos;

        public function __construct($dni, $nombre, $apellido, $puntos){
            parent::__construct($dni, $nombre, $apellido);
            $this->puntos = $puntos;
        }

            public function setPuntos(){
                $this->puntos = $puntos;
            }

            public function getPuntos(){
                return $this->puntos;
            }

            public function unirPalabra(){
                $letra = " ";
                $letra = "User: " . $this->getNombre() . "\n" . $this->getApellido() . nl2br("\n");
                return $letra;
            }

            public function visualizarPuntos(){
                if($this->puntos < 100){
                    return "Tienes menos de 100 puntos: " . $this->puntos . nl2br("\n");
                }
            }
    }
    $c1 = new User("73031633D", "Ander", "Ramos", 120);
    echo $c1->unirPalabra();
    echo $c1->visualizarPuntos();

    $c2 = new User("32516881S", "Ramos", "Ander", 80);
    echo $c2->unirPalabra();
    echo $c2->visualizarPuntos();
    ?>
</body>
</html>