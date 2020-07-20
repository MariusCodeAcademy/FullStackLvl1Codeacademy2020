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

    // sukuriam metoda uzklausos vygdymui su atgaliniu rysiu
    public function makeQuery($query, $msg)
    {
        // uzklausos vykdymas
        if($this->conn->query($query) === TRUE) {
            // uzklausa ivykdyta sekmingai
            echo "$msg <br>";
        } else {
            // ivyko klada
            echo 'ivyko klaida: ' . $this->conn->error;
        }
    }

    // sukuriam metoda sukurti naujai lenteliai posts
    public function createPostsTable()
    {
        // apsirasyti query arba sql texta
        $query = "
        CREATE TABLE Posts (
            id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(30) NOT NULL,
            author VARCHAR(30) NOT NULL,
            body TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        // uzklausos vykdymas
        $this->makeQuery($query, 'Lentele sukurta sekmingai');

    }

    // funkcija irasyti duomenims i lentele
    public function addPost($title, $body, $author) 
    {
        // apsirasyti query arba sql texta
        $query = "
            INSERT INTO posts (`title`, `body`, `author`)
            VALUES ('$title', '$body', '$author');
        ";

        // issiusti ta query vygdymui 
        $this->makeQuery($query, 'Irasas sukurtas sekmingai');
    }

    // Gauti duomenis is duomenu bazes
    public function getPosts()
    {
        // apsirasyti query arba sql texta
        $sql = "SELECT * FROM posts ORDER BY `created_at` DESC";

        // vygdom query
        $resultMysqlObj = $this->conn->query($sql);
        // tikrisnam ar gavom nors viena eilute
        if ($resultMysqlObj->num_rows > 0 ){
            // turim gave duomenu pagal sql
            return $resultMysqlObj->fetch_all(MYSQLI_ASSOC);
        } else {
            echo '0 rows <br>';
        }
    }




    // funckija uzdaryti db sujungimui
    public function closeDb()
    {
        $this->conn->close();
    }

}