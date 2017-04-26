<head>
    
    
    <title>Nora OOP php</title>



</head>


<body>
    
    
    
    
    
    <?php
    
    class Number {
        
        public $number;
        
        public function __construct() {
            $this->number = rand(1,10);
           echo $this->number;
            echo "<br/>";
            ob_flush();
            flush();
            sleep(1);
            unset($this);
            
        }
        
        public function __destruct() {
            $number = new Number;
        }
        
        public function __toString() {
            echo $this->number;
        }
        
       
    }
    
    
   $number = new Number;
    
    
    
 
     
    ?>


</body>