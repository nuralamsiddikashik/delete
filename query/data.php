<?php

namespace AdminDelete\Query;

include_once("config/db.php"); 

use \AdminDelete\Config\DB;

class Data extends DB {

    public function displayData() {
        $sql   = "SELECT * FROM user";
        $array = array();
        $query = mysqli_query( $this->connection, $sql );
        while ( $row = mysqli_fetch_assoc( $query ) ) {
            $array[] = $row;
        }
        return $array;
    }
}