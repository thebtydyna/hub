<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../models/Member.php';

class MemberController {


    public function getAllMembers(): array {
        $sql = "SELECT id, first_name, last_name FROM member";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'Error ' . $e->getMessage();
            return [];
        }
    }
}
?>