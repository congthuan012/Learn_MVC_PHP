<?php 
class Controller{
    function view($view,$data = [],$layout = 'layout')
    {
        if(is_array($data))
        {
            extract($data);
        }

        require_once "./resources/views/$layout.php";
    }
}
?>