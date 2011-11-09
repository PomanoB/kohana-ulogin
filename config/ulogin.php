<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	// ��������� ��������: small, panel, window
	'type' 			=> 'panel',
	
	// �� ����� ����� ����� POST-������ �� uLogin
	'redirect_uri' 	=>	NULL,
	
	// �������, ��������� �����
	'providers'		=> array(
		'vkontakte',
		'facebook',
		'twitter',
		'google',
	),
	
	// ��������� ��� ���������
	'hidden' 		=> array(
		'odnoklassniki',
		'mailru',
		'livejournal',
		'openid'
	),
	
	// ��� ���� ������������ ��� ���� username � ������� users
	'username' 		=> array (
		'first_name',
		'last_name',
	),
	
	// ������������ ����
	'fields' 		=> array(
		'email',
	),
	
	// �������������� ����
	'optional'		=> array(),
);
