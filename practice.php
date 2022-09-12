<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" co<h1ntent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        The fruits program "object oriented programing"
    </h1>
    <?php
    class Fruits{
        public $name;
        public $color;
         function set_name($name){
            $this->name=$name;
         }
         function set_color($name){
            $this->color=$color;
         }
         function get_name(){
            return $this->name=$name;
         }
         function get_color(){
            return $this->color=$color;
         }
    }
    //creating objects
    $apple=new Fruits();
    $banana=new Fruits();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    
    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>
</body>
</html>