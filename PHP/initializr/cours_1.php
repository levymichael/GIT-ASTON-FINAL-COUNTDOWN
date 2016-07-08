<?php

$my_string = 'bonjour lulu';
$my_int = 10;
$my_state = TRUE;
$my_users = array (
	0 => 'JP',
	1 => 'DD',
	2 => 'JFQ',
	);

foreach ($my_users as $id => $value) {
	$markup = $id.'=>'.$value.'<br/>';
	print $markup;
	# code...
};

$my_name = array (
	'user1' => 'JP',
	'user2' => 'DD',
	'user3' => 'JFQ',
	);

foreach ($my_name as $key => $valeur) {
	$markup = $key.'=>'.$valeur.'<br/>';
	print $markup;
	# code...
die();
};

$my_girl = array (

	2 => array(
	'id' => '7',
	'name' => 'DD',
	'mail' => 'DD@example.com',
	'role' => array('journalist'),
	),

	3 => array(
	'id' => '8',
	'name' => 'JFQ',
	'mail' => 'JFK@example.com',
	'role' => array('president'),
	),

	4 => array(
	'id' => '9',
	'name' => 'ML',
	'mail' => 'ML@example.com',
	'role' => array('jwebaster','chef'),
	)
	);

foreach ($my_girl as $girl ) {
	$markup = $girl.'=>'.$valeur.'<br/>';
	print 'nom:' .$gir['name'].<br/>;
	print 'email:'.$girl['mail'].<br/>;
	# code...
}

?>