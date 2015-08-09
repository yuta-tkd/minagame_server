<?php
App::uses('AppController', 'Controller');

class TemperaturesController extends AppController {

  public $components = array('RequestHandler');

  public $uses = array('Temperature','Edison');


  // (GET) /temperature.format
  public function index() {
    $temperatures = $this->Temperature->find('all');

    $this->set(compact('temperatures'));
    $this->set('_serialize', array('temperatures'));
  }

  // (GET) /temperature/{edison_name}.format
  public function view($edisonName = null) {
    $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
    $temperatures = $this->Temperature->findAllByEdisonId($edisonId);

    $this->set(compact('temperatures'));
    $this->set('_serialize', array('temperatures'));
  }

  // (POST) /temperature.format
  // @require edisonName {string}
  // @require Temperature{
  //   temperature {int}
  //   time {datetime}
  // }
  public function add() {
    $data = $this->request->data;
    $edisonName = $data['edisonName'];

    //Log
    $this->log($data,LOG_DEBUG);

    $edison = null;
    $message = 'Error';
    if(!empty($data['edisonName'])){
      $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
      if($edisonId){
        $this->Temperature->create();
        $temperature = $this->Temperature->save(array(
          'edison_id' => $edisonId,
          'temperature' => $data['temperature'],
          'time' => $data['time']
        ));
        if ($temperature) {
          $message = 'Saved';
        }
      }
    }

    $this->set(compact('message'));
    $this->set(compact('temperature'));
    $this->set('_serialize', array('message','temperature'));
  }
  //
  // public function edit($id = null) {
  //   $this->Todo->id = $id;
  //   if ($this->Todo->save($this->request->data)) {
  //     $message = 'Saved';
  //   } else {
  //     $message = 'Error';
  //   }
  //   $this->set(array(
  //     'message' => $message,
  //     '_serialize' => array('message')
  //   ));
  // }
  //
  // public function delete($id = null) {
  //   if ($this->Todo->delete($id)) {
  //     $message = 'Deleted';
  //   } else {
  //     $message = 'Error';
  //   }
  //   $this->set(array(
  //     'message' => $message,
  //     '_serialize' => array('message')
  //   ));
  // }

}
