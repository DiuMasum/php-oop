<?php
    class man{
        public $name;
        public $age;
        public $address;

        function __construct($name, $age){
            $this -> name = $name;
            $this -> age = $age;
        }
        
        function info(){
            return "Name: ". $this -> name . ", age is " . $this -> age;
        }
    }

    $masum = new man('sahriar', 23);

    echo $masum->info();
?>