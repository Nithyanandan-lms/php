<?php
ini_set('display_errors', 1);

    class monitor { //class name
        public $name; // variable name
        public $brand;
        public $price;
        public $size;
        public $color;
        public $resolution;
        private $refresh_rate;
        protected $weight;

        public function basic_info() { // function names
            $this->name = "LG monitor"; // set value for the variable
            $this->brand = "LG";
            $this->price = "6000";
            $this->size = "22 inch";
            $this->color = "black";

            // return $this->name; // return value
            return ($this->name . "<br>" . $this->brand . "<br>" . $this->price . "<br>" . $this->size . "<br>" . $this->color); // return value
            // return ($this->name . "LG monitor <br>" . $this->brand . "LG <br>" . $this->price . "Rs.6000 <br>" . $this->size . "22inch <br>" . $this->color); // return value
        }

        private function resolution_info() { // function name
            $this->resolution = "1920x1080"; //variable name for this function
            return $this->resolution;
        }

        function get_resolution() { // function name
            $this->resolution1 = "1080x920"; //variable name for this function
            return $this->resolution_info();
            return $this->resolution1;
        }

        // constructor
        function __construct($name1) { // function name
            $this->name1 = $name1; // variable name
            return $this->name1;
        }

        private function get_refresh_rate() { // function name
            $this->refresh_rate = "100HZ";
            return $this->refresh_rate;
        }

        function get_weight() { // function name
            return $this->weight;
        }
    }
    $monitor_info = new monitor("HP"); // object name (parameter value for constructor)
    echo $monitor_info->basic_info(); // call function

    echo '<br>';

    echo $monitor_info->get_resolution(); // call function

    echo '<br>';

    class monitor1 extends monitor {
        function basic_info() {
            $this->name = "Samsung monitor";
            $this->brand = "Samsung";
            $this->price = "7000";
            $this->size = "24 inch";
            $this->color = "white";
            $this->resolution = "1920x1080";
            $this->refresh_rate = "120HZ";
            $this->weight = "4000 grams";

            return $this->name;
        }
    }

    $monitor_info1 = new monitor1("Lenovo"); // object name (parameter value for constructor)

    echo $monitor_info1->basic_info(); // call function

?>
