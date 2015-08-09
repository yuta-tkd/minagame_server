<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class Edison extends AppModel {

	public $hasMany = array(
		'Touch','Temperature','Photo','Sound'
	);

	// public $hasOne = array(
	// );

	//バリデーション
	public $validate = array(
		'name' => array(
			'rule' => array('isUnique'),
			//'required' => true,
			'message' => 'その名前は既に使われています。'
		),
	);

}
