<html>
<body>
<?php
    class Factoriales{
        public $factorial = array();
        public $naturales = array(0,1,2,3,4,5,6,7,8,9);
        public function factorial(){
            for($i=0;$i<count($this->naturales);$i++) {
                $var = $this->naturales[$i] ;
                for($x=$i;$x>1;$x--) {
                    $var = $var*($x-1);
                }
                $this->factorial[$i] = $var;
                echo $this->factorial[$i] . "\n";
            }
        }

        /*public function Print() {
            foreach ($this->naturales as factorial()) {
                print($this->naturales);
            }
        }*/
    }
    $p1 = new Factoriales();
    $p1->factorial();
?>
</body>
</html>