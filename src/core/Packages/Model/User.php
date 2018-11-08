<?php

namespace Package\Model;

use Package\Core\Model;

/**
 *
 */
class User {
  private $connection;
  private const table = 'Users';

  public function __construct(){
    $this->connection = Model::connect();
  }

  public function insert($datas = []){
    return $this->connection->insert(self::table, $datas);
  }

  public function get($conditions = []){
    return (
      $this->connection
      ->select(self::table)
      ->where($conditions)
      ->fetch()
      ->get()
    );
  }

}


?>
