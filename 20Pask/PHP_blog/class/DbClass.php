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
            echo "Prisijungimas sekmingas<br>";
            // issaugom prisijungima i privatu kinatmaji 
            return $this->conn = $conn;
        }
    }

    // sukuriam metoda sukurti naujai lenteliai posts
    public function createPostsTable()
    {
        $query = "
        CREATE TABLE Posts (
            id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(30) NOT NULL,
            author VARCHAR(30) NOT NULL,
            body TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        // uzklausos vykdymas
        if($this->conn->query($query) === TRUE) {
            // uzklausa ivykdyta sekmingai
            echo 'lentele sukurta sekmingai <br>';
        } else {
            // ivyko klada

            echo 'ivyko klaida: ' . $this->conn->error;
        }

    }

    // funkcija irasyti duomenims i lentele
    public function addPost($title, $body, $author) {
        
    }




    // funckija uzdaryti db sujungimui
    public function closeDb()
    {
        $this->conn->close();
    }

}