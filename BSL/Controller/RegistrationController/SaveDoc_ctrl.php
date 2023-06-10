<?php

class SaveDoc_ctrl {
  private $SaveModel;

  // controller's constructor
  public function __construct($SaveModel) {
    $this->SaveModel = $SaveModel;
  }

  public function testinput($waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date) {
    // Call inputdetail function in SaveModel
    $this->SaveModel->inputdetail($waliname, $waliIC, $relationship, $bridename, $groomname, $dowry, $date);

    // //Call input function in Save Model
    // $this->SaveModel->inputdetail($waliname,$waliIC,$relationship,$bridename,$groomname,$dowry,$date);
  
  }
}
