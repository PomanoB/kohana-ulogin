<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Kohana_Ulogin extends ORM {

	protected $_belongs_to = array(
		'user' => array(),
	);

	public function rules()
	{
		return array(
			'network' => array(
				array('not_empty'),
				array('max_length', array(':value', 255)),
			),
			'identity' => array(
				array('not_empty'),
				array('max_length', array(':value', 255)),
				array(array($this, 'unique'), array('identity', ':value')),
			),
		);
	}
}