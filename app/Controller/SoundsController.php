<?php
App::uses('AppController', 'Controller');

class SoundsController extends AppController {

  public $components = array('RequestHandler');

  public $uses = array('Sound','Edison');


  // (GET) /sounds.format
  public function index() {
    $sounds = $this->Sound->find('all');

    $this->set(compact('sounds'));
    $this->set('_serialize', array('sounds'));
  }

  // (GET) /sounds/{edison_name}.format
  public function view($edisonName = null) {
    $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
    $sounds = $this->Sound->findAllByEdisonId($edisonId);

    $this->set(compact('sounds'));
    $this->set('_serialize', array('sounds'));
  }

  // (POST) /sounds.format
  // @require edisonName {string}
  // @require Sound{
  //   sound {int}
  //   time {datetime}
  // }
  public function add() {
    $data = $this->request->data;
    $edisonName = $data['edisonName'];

    $edison = null;
    $message = 'Error';
    if(!empty($data['edisonName'])){
      $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
      if($edisonId){
        $this->Sound->create();
        $sound = $this->Sound->save(array(
          'edison_id' => $edisonId,
          'sound' => $data['sound'],
          'time' => $data['time']
        ));
        if ($sound) {
          $message = 'Saved';
        }
      }
    }

    $this->set(compact('message'));
    $this->set(compact('sound'));
    $this->set('_serialize', array('message','sound'));
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
