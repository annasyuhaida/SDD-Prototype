<?php

class SaveDoc_ctrl {
  private $SaveModel;

  // controller's constructor
  public function __construct($SaveModel) {
    $this->SaveModel = $SaveModel;
  }

  public function testinput($waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date) {
    

    //Call input function in Save Model
    $this->SaveModel->inputdetail($waliname);
    $this->SaveModel->inputdetail($waliIC);
    $this->SaveModel->inputdetail($relationship);
    $this->SaveModel->inputdetail($bridename);
    $this->SaveModel->inputdetail($groomname);
    $this->SaveModel->inputdetail($dowry);
    $this->SaveModel->inputdetail($date);
  }
}
  ?>