<?php

class DAL
{
  private $DB_NAME = "pessoas"; //substituir pelo nome da BD
  private $DB_HOST = "localhost";
  private $DB_USER = "admin"; //substituir pelo nome da conta
  private $DB_PASS = "admin"; //substituir pela password

  function db_connect(): ?mysqli
  {
    $mysqli = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
    if (mysqli_connect_errno())
      return NULL;
    return $mysqli;
  }

  function valUser($userId, $password): mysqli_result|bool|null
  {
    $mysqli = $this->db_connect();
    if ($mysqli) {
      $strquery = "SELECT * FROM login where username= '" . $userId . "'";
      $strquery .= " and password='" . $password . "'";
      $recordset = $mysqli->query($strquery);
      return $recordset;
    }
    return null;
  }
}


