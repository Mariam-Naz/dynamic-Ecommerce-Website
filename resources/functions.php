<?php
    
    function redirect($location){
        header("Location: $location");
    }

    function query($sql){
        global $connection;
        return mysqli_query($connection,$sql);
    }

?>