<?php

class DB{

    public static function connection(){

        return mysqli_connect('localhost','root','','db_edwin');
    }
}

?>