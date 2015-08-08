<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class Edison extends AppModel {

	public $hasMany = array(
		'Touch','Temperature'
	);

	// public $hasOne = array(
	// );

	//バリデーション
	public $validate = array(
		'name' => array(
			'rule' => 'isUnique',
			//'required' => true,
			'message' => 'その名前は既に使われています。'
		),
	);

}
