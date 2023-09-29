<?php
interface DatabaseInterface {
    public function connect();
    public function insertPersons($name, $email, $phone, $password, $comments);
}

class Database implements DatabaseInterface {
    private $host = "localhost";
    private $dbname = "formdb";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    public function insertPersons($name, $email, $phone, $password, $comments) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO persons (name, email, phone, password, comments) VALUES (:name, :email, :phone, :password, :comments)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':comments', $comments);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
