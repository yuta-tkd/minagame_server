<?php
App::uses('AppController', 'Controller');

class ApiController extends AppController {

  public $uses = array('Photo','Edison','Touch','Sound','Temperature');

  public function login(){
    $param = $this->request->data;
    $edisonName = $param['edisonName'];

    $this->log($edisonName,LOG_DEBUG);
    $check = false;
    if($this->Edison->findByName($edisonName)){
      $check = true;
    }

    $this->viewClass = 'Json';
    $this->set(compact('check'));
    $this->set('_serialize', array('check'));
  }


  //分単位で時間をさかのぼって、データを取得する。
  public function allSensor(){
    $param = $this->request->data;
    $edisonName = $param['edisonName'];
    $startTime = $param['startTime'];
    $duration = $param['duration'];

    $edisonId = $this->Edison->findByName($edisonName)['Edison']['id'];
    if($edisonId){

      $dateTime = new DateTime($startTime);
      $dateTime->modify('-10 minutes');
      $endTime = $dateTime->format('Y-m-d H:i:s');

      // $this->log($startTime,LOG_DEBUG);
      // $this->log($endTime,LOG_DEBUG);

      $conditions = array(
        'time >=' => $endTime,
        'time <=' => $startTime
      );
      $order = array('time' => 'desc');

      $touches = $this->Touch->find('all', compact('conditions','order'));
      $temperatures = $this->Temperature->find('all', compact('conditions','order'));
      $sounds = $this->Sound->find('all', compact('conditions','order'));
      $photos = $this->Photo->find('all', compact('conditions','order'));


      $allSensors = array(
        'Touches' => $touches,
        'Temperatures' => $temperatures,
        'Sounds' => $sounds,
        'Photos' => $photos
      );
    }

    $this->viewClass = 'Json';
    $this->set(compact('allSensors'));
    $this->set('_serialize', array('allSensors'));
  }

}
