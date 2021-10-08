<html>

<body>
<?php
class Ejercicio8{
    public $path;

    public function __construct($path){
        $this->path = $path;
    }

    public function config(){
        try {
          if (!file_exists($this->path)){
              throw new Exception("Configuration file not found.");
            }
            echo "The file exists";
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
$p1 = new Ejercicio8("config.php");
$p1-> config();
?>
</body>
</html>