<?php
class Connect
{

  private $host = "localhost";
  private $dbName = "datarecord";
  private $user = "root";
  private $pwd = "root123";

  public function connect()
  {
    try
    {
      $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->user,$this->pwd);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      return $pdo;
    }catch(PDOExecption $e){
      echo "Error Message: ".$e->getMessage();
    }
    
  }
}
 ?>
