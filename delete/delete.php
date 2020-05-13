<?php
namespace AdminDelete\Delete;

include_once ("../config/db.php"); 

use \AdminDelete\Config\DB;

// $userId = $_POST['id'];
// $str    = implode( $userId, "," );
// echo $str; 


class Delete extends DB {
    public function getDelete() {
        $userId = $_POST['id'];
        // $str    = implode( ', ', $userId);
        foreach($userId as $id){
            mysqli_query($this->connection,"DELETE FROM user WHERE id='{$id}'"); 
        }
    }
}

$data = new Delete();
$data->getDelete();