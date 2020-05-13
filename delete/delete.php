<?php
namespace AdminDelete\Delete;

use \AdminDelete\Config\DB;

// $userId = $_POST['id'];
// $str    = implode( $userId, "," );
// echo $str; 


class Delete extends DB {
    public function getDelete() {
        $userId = $_POST['id'];
        $str    = implode( $userId, "," );
        echo $str; 
    }
}

$db = new DB();
$data = new Delete();