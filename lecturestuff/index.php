<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class Horse {
                //class body
                //class body
                //class body
}
            class Car {
                //class body
                //class body
                //class body
}
            class Clown {
                //class body
                //class body
                //class body
}
            $sweater1 = new sweater();
            $sweater2 = new sweater();
            $sweater3 = new sweater();
            class sweater1 {

                public $color = "grey";
                public $size = "large";
                public $type = "hoodie";
            }
             class sweater2 {

                public $color = "white";
                public $size = "medium";
                public $type = "hoodless";
            }
             class sweater3 {

                public $color = "striped";
                public $size = "small";
                public $type = "turtleneck";
            }
            $sweater1 = new sweater();
            print $sweater1­>color;
            $sweater2 = new sweater();
            print $sweater2­>color;
        ?>
        <?php
            if (is_integer()) {
                echo "it is a number";
            }
            else {
            echo "It is not a number";
            var_dump(is_integer(‘XYZ’));
            var_dump(is_integer(‘8008’));
            var_dump(is_integer(123));
            var_dump(is_integer(false));
            }
            if (is_object()) {
                echo "it is an object";
            }
            else {
            echo "It is not an object";
            var_dump(is_object(‘XYZ’));
            var_dump(is_object(‘8008’));
            var_dump(is_object(123));
            var_dump(is_object(false));
            }
            if (is_string()) {
                echo "it is a string";
            }
            else {
                echo "It is not a string";
                var_dump(is_string(‘XYZ’));
                var_dump(is_string(‘8008’));
                var_dump(is_string(123));
                var_dump(is_string(false));
            }
?>
    </body>
</html>
