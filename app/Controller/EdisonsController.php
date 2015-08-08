<?php
App::uses('AppController', 'Controller');

class EdisonsController extends AppController {

  public $components = array('RequestHandler');


  // (GET) /edisons.format
  public function index() {
    $edisons = $this->Edison->find('all');

    $this->set(compact('edisons'));
    $this->set('_serialize', array('edisons'));
  }

  // (GET) /edisons/{name}.format
  public function view($edisonName = null) {
    $edison = $this->Edison->findByName($edisonName);

    $this->set(compact('edison'));
    $this->set('_serialize', array('edison'));
  }

  // (POST) /edisons.format
  // @require $name {string}
  public function add() {
    $data = $this->request->data;

    $edison = null;
    $message = 'Error';
    if(!empty($data['name'])){
      $this->Edison->create();
      $edison = $this->Edison->save(array(
        'name' => $data['name']
      ));

      if ($edison) {
        $message = 'Saved';
      }
    }

    $this->set(compact('message'));
    $this->set(compact('edison'));
    $this->set('_serialize', array('message','edison'));
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
