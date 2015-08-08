<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class Temperature extends AppModel {

	public $belongsTo = array(
		'Edison'
	);


}
