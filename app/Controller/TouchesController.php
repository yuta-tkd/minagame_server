<?php
App::uses('AppController', 'Controller');

class TouchesController extends AppController {

  public $components = array('RequestHandler');

  public $uses = array('Touch','Edison');



  // (GET) /touchs.format
  public function index() {
    $touches = $this->Touch->find('all');

    $this->set(compact('touches'));
    $this->set('_serialize', array('touches'));
  }

  // (GET) /touchs/{edison_name}.format
  public function view($edisonName = null) {
    $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
    $touches = $this->Touch->findAllByEdisonId($edisonId);

    $this->set(compact('touches'));
    $this->set('_serialize', array('touches'));
  }

  // (POST) /touchs.format
  // @require edisonName {string}
  // @require Touch{
  //   touch {int}
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
        $this->Touch->create();
        $touch = $this->Touch->save(array(
          'edison_id' => $edisonId,
          'touch' => $data['touch'],
          'time' => $data['time']
        ));
        if ($touch) {
          $message = 'Saved';
        }
      }
    }


    $this->set(compact('message'));
    $this->set(compact('touch'));
    $this->set('_serialize', array('message','touch'));
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
