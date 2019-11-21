<?php
function connect(){
    static $bd;
    if (empty($bd)){
        $bd = mysqli_connect('localhost', 'root', '', 'gallary');
    }
    return $bd;
}
