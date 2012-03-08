<?php
/**
 * The development database settings.
 */

// get the current year
$year = (int) date('Y');

return array(
	'default' => array(
		'connection'  => array(
			'dsn' => 'sqlite:'.APPPATH.'data/apxtras_'.$year.'.sqlite3',
		),
	),
);
