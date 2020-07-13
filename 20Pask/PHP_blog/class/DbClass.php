<?php 
class Db
{
    // apsirasom kintamuosius 
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'php_blog';
    // esamam prisijungimui naudosim kintamaji conn
    private $conn; 

    // metodas prisijungimui prie duomenu bazes
    public function connectToDb()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // patikrinti ar pavyko prisijungti
        if($conn->connect_error) {
            // yra kazkokia klaida 
            die('Connection failed: ' . $conn->connect_error . '<br>');
        } else {
            // prisijungimas sekmingas, klaidu nera
            echo "Prisijungimas sekmingas";
            // issaugom prisijungima i privatu kinatmaji 
            return $this->conn = $conn;
        }
    }

}