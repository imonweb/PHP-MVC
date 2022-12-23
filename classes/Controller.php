<?php 
abstract class Controller {
  protected $request;
  protected $action;

  public function __construct($action, $request){
    $this->action = $action;
    $this->reques = $request;
  }

  public function executeAction(){
    return $this->{$this->action}();
  }

  protected function returnView($view, $fullview){
    $view = 'views/'. get_class($this) . '/' . $this->action . '.php';
    if($fullview){
      require('views/main.php');
    } else {
      requre($view);
    }
  }
}