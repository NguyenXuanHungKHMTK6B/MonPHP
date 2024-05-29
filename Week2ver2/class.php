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
            class Fruit{
                public $name;
                public $color;
                function set_name($name){ 
                    $this->name = $name;

                }
                function get_name(){
                    return $this -> name;
                }

                function set_color($color){
                    $this->color = $color;                   
                }

                function get_color(){
                    return $this -> color;
                }
            }
            $lemon = new Fruit();
            $lemon->set_name('lemon');
            $lemon->set_color('blue');

            $apple = new Fruit();
            $apple->set_name('apple');
            $apple->set_color('red');

            echo "The first fruit is " . $lemon->get_name() . ", color: " . $lemon->get_color() . "<br>";
            echo "The first fruit is " . $apple->get_name() . ", color: " . $apple->get_color() . "<br>";
        ?>
    </body>
</html>
