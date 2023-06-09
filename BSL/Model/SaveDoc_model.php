<?php
class SaveModel {

  private $connect;

  //Registration controller's constructor
  public function __construct($database) {
    $this->connect = $database;
  }

  //This function will insert data in mySQL database
  public function inputdetail($waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date) {
    $query = $this->connect->prepare("INSERT INTO testing_input (waliname, waliIC, relationship, bridename, groomname, dowry, date) VALUES (?)");
    $query->execute([$waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date]);

  }

}

?>