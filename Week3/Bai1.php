<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <?php
        // class Fruit{
        //     public $name;
        //     public $color;
        //     function __construct($name,$color){
        //         $this -> name = $name;
        //         $this -> color = $color;
        //     }
        //     function set_name($name){
        //         return $this -> name ;
        //     }
        //     function get_name($name){
        //         return $this ->color;
        //     }
        //     function __destruct()
        //     {
        //         echo "The fruit is {$this -> name} and the color is {$this -> color}";
        //     }
        // }
        // $apple = new Fruit("Apple ","red");
        // echo $apple -> get_name( );
        // echo "<br>";
        // echo $apple -> get_color();
            // class Fruit{
            //     public $name;
            //     public $weight;
            //     public $color;''
            // }
            // function set_name($n){
            //     $this -> name = $n;
            // }
            // protected function set_color($n){
            //     $this ->color = $n;
            // }
            // private function set_weight($n){
            //     $this -> weight = $n;
            // }
            // $mango = new Fruit ();
            // $mango ->name = 'Mango';
            // $mango ->color = 'Yellow';
            // $mango ->weight = ' 300';
    class Fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this -> name = $name;
            $this -> color = $color;
        }
        public function intro(){
            echo"The fruit is {$this -> name} and the color is {$this -> color}";
        }
    }
    class Strawberry extends Fruit{
        public function message ()  {
            echo "Am i a fruit or a berry? ";
        }
    }
        ?>

    </body>
</html>
