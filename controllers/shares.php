<?php 
class Shares extends Controller {
  protected function Index(){
    // echo 'SHARES/INDEX';
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->Index(), true);
  }
}