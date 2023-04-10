<?php

class CreateDb {

  private $server;
  private $username;
  private $password;
  private $dbName;
  private $tbName;
  private $con;

  public function __construct(
    $server = "localhost",
    $username = "root", 
    $password = "", 
    $dbName = "tugasdb",
    $tbName = "tugastb"
  ) {
      $this->server = $server;
      $this->username = $username;
      $this->password = $password;
      $this->dbName = $dbName;
      $this->tbName = $tbName;
      $this->con = mysqli_connect($server, $username, $password, $dbName);

      if (!$this->con) {
        die("Connection failed : " . mysqli_connect_error());
      }
  }
  public function query($sql) {
    $sql = "SELECT * FROM $this->tbName";

    $result = mysqli_query($this->con, $sql);
    if (!$result) {
      die("Query failed : " . mysqli_error($this->con));
    }
    return $result;
    //$rows = [];
    
    //while($row = mysqli_fetch_assoc($result)) {
    //  $rows[] = $row;
    //}
  }
}

