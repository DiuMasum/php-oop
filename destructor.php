<?php
    class man{
        public $name;
        public $age;
        public $address;

        function __construct($name, $age)
        {
            $this -> name = $name;
            $this -> age = $age;
        }
        function __destruct()
        {
            echo $this -> name . '<br>' . $this -> age;
        }
    }

    $masum = new man('masum sahriar', 23);
?>