<?php
    // Create connection
    $con = new mysqli("localhost","root","","loginsqli");

    //To Prevent happening of sqlinjection
    
        // const DB_HOST_NAME = 'localhost';
        // const DB_NAME = 'security';
        // const DB_USER_NAME = 'root';
        // const DB_PASS = '';
        // const TBL = 'users';
    // function __construct()
  // {
  //   $dsn = "mysql:host=" . DB_HOST_NAME . ";dbname=" . DB_NAME;
  //   try {
  //     $this->connection = new PDO($dsn, DB_USER_NAME, DB_PASS);
  //     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   } catch (PDOException $e) {
  //     echo $e->getMessage();
  //   }
  // }
?>