<html>
<body>
    <!--<form action="Ej6.php" method="post">
        <label for="Nombre">Introduzca un nombre:</label>
        <input type="text" id="Nombre" name="Nombre">
        <br>
        <label for="Meses">Elige un mes:</label>
        <select name="Meses" id="Meses">
        <option value="Enero">Enero</option>
        <option value="Febrero">Febrero</option>
        <option value="Marzo">Marzo</option>
        <option value="Abril">Abril</option>
        <option value="Mayo">Mayo</option>
        <option value="Junio">Junio</option>
        <option value="Julio">Julio</option>
        <option value="Agosto">Agosto</option>
        <option value="Septiembre">Septiembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Noviembre">Noviembre</option>
        <option value="Diciembre">Diciembre</option>
        </select>
        <br>
        <input type="submit" value="Introducir datos">
    </form>
    <p name="Lista"/>-->
<?php
    class Cumpleanos{
        //public $dom = new DOMDocument('1.0', 'iso-8859-1');
        //$dom->validateOnParse = true;
        private $cumpleanos;
        public $sacT;
        //$array = $dom->getElementById("Meses")->textContent . ":";
        //echo $array;
        public function __construct($birthdays) {
            $this->cumpleanos = array();
            if(!empty($birthdays)) {
                for($i=0;$i<count($birthdays);$i++) {
                    $this->cumpleanos[$i] = $birthdays[$i];    
                }
            }
            else {
                $this->meses = $_POST["meses"] . ":";
            }
        }
        /*public function anadirMeses($name,$mes){
                $this->Meses[$name] += $mes;
            
        }

        public function printMonths(){
            foreach ($)
        }*/

        public function SacarTodo() {
            for($i=0;$i<count($this->cumpleanos);$i++) {
                $this->sacT += "<ul>" .$mes . ":" . "<li>" . $name . "</li></ul>";
                echo $this->sacT;
            }
            /*foreach ($this->cumpleanos as $name=>$mes) {
                $this->sacT = "<ul>" . $mes . ":" . "<li>" . $name . "</li></ul>";
                echo $this->sacT;
            }*/
        }
    }

    $birthdays = ["Ander"=>"Agosto", "Unai"=>"January", "Pablo"=>"Octubre", "Oihan"=>"Agosto"];

    $cumpleanos = new Cumpleanos($birthdays);
    $cumpleanos->SacarTodo();
?>
</body>
</html>