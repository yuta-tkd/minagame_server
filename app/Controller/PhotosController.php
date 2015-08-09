<?php
App::uses('AppController', 'Controller');

class PhotosController extends AppController {

  public $components = array('RequestHandler','Security');

  public $uses = array('Photo','Edison');

  public function beforeFilter(){
    parent::beforeFilter();

    $this->Security->csrfCheck = false;
    $this->Security->validatePost = false;

	}


  // (GET) /photos.format
  public function index() {
    $photos = $this->Photo->find('all');

    $this->set(compact('photos'));
    $this->set('_serialize', array('photos'));
  }

  // (GET) /photos/{edison_name}.format
  public function view($edisonName = null) {
    $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
    $photos = $this->Photo->findAllByEdisonId($edisonId);

    $this->set(compact('photos'));
    $this->set('_serialize', array('photos'));
  }

  // (POST) /photos.format
  // @require edisonName {string}
  // @require Photo{
  //   photo {int}
  //   time {datetime}
  // }
  public function add() {
    $data = $this->request->data;
    $edisonName = $data['edisonName'];

    //Log
    $this->log($this->data,LOG_DEBUG);
    $this->log($data,LOG_DEBUG);

    $edison = null;
    $message = 'Error';
    if(!empty($data['edisonName'])){
      $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
      if($edisonId){
        $this->Photo->create();
        $photo = $this->Photo->save(array(
          'edison_id' => $edisonId,
          'photo' => $data['photo'],
          'time' => $data['time']
        ));
        if ($photo) {
          $message = 'Saved';
        }
      }
    }

    $this->set(compact('message'));
    $this->set(compact('photo'));
    $this->set('_serialize', array('message','photo'));
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
