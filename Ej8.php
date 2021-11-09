<html>

    <body>
        <?php
        class Ejercicio8{
            public $path;

            public function __construct($path){
                $this->path = $path;
            }

            public function config(){
                if (!file_exists($this->path)){
                    throw new Exception("Configuration file not found.");
                    }
                    return true;
            }
        }


        try {
            $p1 = new Ejercicio8("Ej9.php");
            if ($p1-> config()){
                echo " file exists";
            }
        } catch (Exception $e) {
            echo 'Excepcion capturada: ' . $e->getMessage(), "\n";
        }

                

        ?>
    </body>
</html>