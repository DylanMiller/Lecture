<?php
    class Animal {
        public $firstName;
        public $lastName;
        public $scientificName;
        public $gender;
        public $weight;
        public $bark;
        public $meow;
        function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
            $this->scientificName = $scientificName;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
            $this->weight = $weight;
}
        function getName() {
            return "This is my " . $this­>firstName .
            " and last " . $this->lastName .
            " and this is my scientific­name " . $this->scientificName . " .";
}
}
        class Cat extends Animal {
            function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
                $this->meow = $meow;
}
        function greet() {
            return $this->meow;
            parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
}
}
        class Dog extends Animal {
            function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark) {
                $this->bark = $bark;
}
        function hello() {
            return $this->bark;
}
}
        $cat = new Cat("Cat", "Mellow", "Yellow", "male", 15, true);
        print "Animal 1 is a " . $cat­>getName();
        parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);

        
    class Fruit {
        public $type;
        public $color;
        public $size;
        function __construct($type, $color, $size) {
            $this->type = $type;
            $this->color = $color;
            $this->size = $size;
}
        function getName() {
            return "This is my " . $this->type .
            ", it is " . $this->color .
            " and " . $this->size . " .";
}
}
        class orange extends Fruit {
            function __construct($type, $color, $size){
               
}
        function greet() {
            parent::__construct($type, $color, $size);
}
}
        class lemon extends Fruit {
            function __construct($type, $color, $size) {
 
}
        function hello() {

}
}
        $type = new type("orange", "bright orange", "big", true);
        print "Fruit 1 is a " . $type­>getName();
        parent::__construct($type, $color, $size);