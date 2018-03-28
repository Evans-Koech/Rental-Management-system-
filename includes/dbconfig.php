<?php

function dbconn(){
    $dbconn =mysqli_connect('localhost', 'root','9570', 'rent');
    if(!$dbconn){
        die("There was an error connecting to to db".mysqli_error($dbconn));
    }else{
        // echo "database connection successful";
        return $dbconn;
    }
}

?>