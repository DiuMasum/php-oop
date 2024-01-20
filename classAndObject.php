<?php
    class man{
        public $name;
        public $age;
        public $address;

    function info($name, $age, $address){
        $this -> name = $name;
        $this -> age = $age;
        $this -> address = $address;

        return "Name : " .$this->name.", Age: ".$this ->age." & Address : ".$this ->address;
    }
    }

    $masum = new man();
    echo $masum->info('sahriar', 23, 'dhakassss!!!!!!');
    echo "<br>";
    
    $suhashini = new man();
    echo $suhashini->info('tamanna', 22, 'gram');
?>