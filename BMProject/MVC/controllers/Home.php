<?php 
class Home extends Controller
{
    function displayIntroduction()
    {
        echo"Hello chim cook";
    }
    function displayUser(){
        echo "Welcome to chim cook";
    }
    function displayIndex(){
        $this->view("master",[
            "Page" => "home"
        ]);
    }
}
?>