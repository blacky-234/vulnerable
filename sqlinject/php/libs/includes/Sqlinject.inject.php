<?php
require_once "Database.class.php";

Class SqlInject
{
    private $conn;

    public static function sqlinject($productname){

        $sql = "SELECT * FROM `product` WHERE `name`='$productname'";
        $conn = Database::getConnection();
        $result = $conn->query($sql);
        if($result){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public static function sqlprevent($productname)
    {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM `product` WHERE `name` = ?");        
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("s", $productname);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>