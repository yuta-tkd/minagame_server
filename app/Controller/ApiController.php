<?php
App::uses('AppController', 'Controller');

class ApiController extends AppController {

  public $uses = array('Photo','Edison','Touch','Sound','Temperature');

  public function login($edisonName = null){
    $check = false;
    if($this->Edison->findByName($edisonName)){
      $check = true;
    }

    $this->set(compact('check'));
    $this->set('_serialize', array('check'));
  }

}
