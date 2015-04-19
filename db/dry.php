<?php
class Database {
    private $lien;
    private $create_DB;
    private $create_tbl;
    private $host, $username, $password;
    
    public function __construct($host, $username, $password){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        
        $this->lien = mysqli_connect($this->host, $this->username, $this->password);
        if (!($this->lien)) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return true;
    }
    
    public function createDB($dbname) {
        $this->create_DB = "CREATE DATABASE".' '.$dbname;
        mysqli_query($this->lien, $this->create_DB)
            OR die("Error creating database: " . mysqli_error($this->lien)."<br/>");
        return true;
    }
    
    public function connectDB($dbname){
        $this->lien = mysqli_connect($this->host, $this->username, $this->password, $dbname);
        if (!($this->lien)) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return true;
    }
    
    /* on peux surement faire mieux avec des tokens... */
    public function createTbl($tbl_name, $type_tbl) {
        if ($type_tbl == 1) { /* users */
            $create_tbl = "CREATE TABLE ".$tbl_name." (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                login VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                passwd VARCHAR(100) NOT NULL,
                reg_date TIMESTAMP
            )";
        } else if ($type_tbl == 2) { /* products */
            $create_tbl = "CREATE TABLE ".$tbl_name." (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                description VARCHAR(200),
                chemin VARCHAR(50) NOT NULL,
                price INT(6),
                reg_date TIMESTAMP
            )";
        } else if ($type_tbl == 3) { /* admin */
            $create_tbl = "CREATE TABLE ".$tbl_name." (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                login VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                passwd VARCHAR(100) NOT NULL,
                description VARCHAR(100) NOT NULL,
                reg_date TIMESTAMP
            )";
        }
        mysqli_query($this->lien, $create_tbl)
            OR die("Error creating table: ".mysqli_error($this->lien)."<br/>");
    }
    /* insert, delete, update, list */
    public function insert_users($login, $email, $passwd){
        $sql = "INSERT INTO users (login, email, passwd) VALUES ('$login', '$email', '$passwd')";
        mysqli_query($this->lien, $sql)
            OR die("Error: " . $sql . "<br>" . mysqli_error($this->lien));
    }
    
    public function insert_admin($login, $email, $passwd, $description){
        $sql = "INSERT INTO admin (login, email, passwd, description) VALUES ('$login', '$email', '$passwd', '$description')";
        mysqli_query($this->lien, $sql)
            OR die("Error: " . $sql . "<br>" . mysqli_error($this->lien));
    }
    
    public function ret_query($query){
        $result = mysqli_query($this->lien, $query);
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
    
    public function exec_query($query) {
        mysqli_query($this->lien, $query)
            OR die("Error: " . $sql . "<br>" . mysqli_error($this->lien));
    }
    
    public function __destruct() {
        mysqli_close($this->lien)
            OR die("There was a problem disconecting from the database.");
    }
}

?>