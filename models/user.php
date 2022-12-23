<?php 
class UserModel extends Model {
  public function Index(){
    // return;
    $this->query('SELECT * FROM shares');
    $rows = $this->resultSet();
    print_r($rows);
  }
}