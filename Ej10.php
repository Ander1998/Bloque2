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

        //tenemos una funcion que guarda en una variable el nombre y el apellido de la persona
        public function datosPersona(){
            $datos = " ";
            $datos = "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . " DNI: " . $this->getDni() . nl2br("\n");
            return $datos;
        }

        //una funcion para guardar el valor de la variable DNI en el constructor
        public function setDni($dni){
            $this->dni = $dni;
        }

        //una funcion para retornar el DNI
        public function getDni(){
            return $this->dni;
        }

        //una funcion para guardar el valor de la variable Nombre en el constructor
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //una funcion para retornar el Nombre
        public function getNombre(){
            return $this->nombre;
        }

        //una funcion para guardar el valor de la variable Apellido en el constructor
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        //una funcion para retornar el Apellido
        public function getApellido(){
            return $this->apellido;
        }

    }

    //una nueva instancia de la clase persona con los 3 parametros requeridos
    $p1 = new Persona("32516881S", "Ramos", "Ander");
    echo $p1->datosPersona();

    //una segunda instancia de la clase persona con los 3 parametros requeridos pero diferentes del primero
    $p2 = new Persona("73031633D", "Ander", "Ramos");
    echo $p2->datosPersona();
    

    //una clase usuario que extiende de la clase persona
    //heredará tanto el dni, como el nombre y el apellido pero tendrá
    //además el parámetro Points
    class Usuario extends Persona{
        //establecemos la variable points con la cual vamos a trabajar
        private $points;

        //creamos el constructor con los parametros a trabajar sabiendo que
        //extiende del construct de la clase Persona
        public function __construct($dni, $nombre, $apellido, $points){
            parent::__construct($dni, $nombre, $apellido);
            $this->points = $points;
        }
            
        //una funcion para retornar los Puntos
        public function getPoints(){               
            return $this->points;            
        }
        
        //Al igual que en persona tenemos una funcion que guarda en una variable el 
        //nombre y el apellido de la persona
        public function datosUsuario(){        
            $datos = " ";   
            $datos = "Nombre: " . $this->getNombre() . "\n" . "Apellido: " . $this->getApellido() . " DNI: " . $this->getDni() . nl2br("\n");   
            return $datos;
        }

        //una función que nos permite, dados los puntos que tenemos, en el caso de que
        //sean menos de 100 sacar por pantalla un mensaje con el texto abajo mostrado 
        public function visualizarPoints(){
            if($this->points < 100){
                return "El usuario " . $this->getNombre() . " con apellido " . $this->getApellido() . " tiene menos de 100 Points, exactamente tiene " . $this->points . " puntos" . nl2br("\n");
            }
        }
    }

     //una nueva instancia de la clase Usuario con los 4 parametros requeridos
    $user1 = new Usuario("34576681A", "Paco", "Pepe", 120);
    echo $user1->datosUsuario();
    echo $user1->visualizarPoints();

    //una segunda instancia de la clase Usuario con los 4 parametros requeridos
    //pero diferentes del primero en este caso le introducimos una cantidad de
    //puntos menor a 100 para que nos muestre el mensaje de visualizarPoints()
    $user2 = new Usuario("59382749F", "Pepe", "Paco", 80);
    echo $user2->datosUsuario();
    echo $user2->visualizarPoints();
    ?>
</body>
</html>