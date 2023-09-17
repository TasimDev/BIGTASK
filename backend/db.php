<?php

require_once 'config.php';

class Database extends Config
{

    //Insert User Info Database
    public function insert($pname, $pdescription, $pimage, $pprice, $ptype)
    {
        $sql = 'INSERT INTO product (name, description, price, image, type) VALUES (:pname, :pdescription, :pprice, :pimage, :ptype)';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'pname' => $pname,
            'pdescription' => $pdescription,
            'pprice' => $pprice,
            'pimage' => $pimage,
            'ptype' => $ptype
        ]);
        return true;
    }
}



?>