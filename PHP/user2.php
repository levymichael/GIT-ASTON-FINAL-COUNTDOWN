<?php
$users = array(
	0 => array(
		'id' => '1',
		'name' => 'JP',
		'mail' => 'jp@example.com',
		'role' => array('admin'),
	),
	1 => array(
		'id' => '2',
		'name' => 'DD',
		'mail' => 'dd@example.com',
		'role' => array('journalist'),
	),
	2 => array(
		'id' => '3',
		'name' => 'MC',
		'mail' => 'mc@example.com',
		'role' => array('chief_editor'),
	),
	3 => array(
		'id' => '4',
		'name' => 'JFX',
		'mail' => 'jfx@example.com',
		'role' => array('webmaster','chief_editor'),
	),
);
$markup = '<table class="table table-hover">';
$markup .= '<thead> <tr> <th>#</th> <th>Name</th> <th>Email</th> <th>Rôles</th></tr> </thead>';
$markup .= '<tbody>';
foreach($users as $user) {
	$markup .= '<tr>';
	$markup .= generate_user_row($user);
	$markup .= '</tr>';
}
$markup .= '</tbody>';
$markup .= '</table>';
print $markup;
/*		FUNCTIONS 		*/
function generate_user_row($user) {
	$row = '<th scope="row">' . $user['id'] . '</th>';
	$row .= '<td>' . $user['name'] . '</td>';
	$row .= '<td>' . $user['mail'] . '</td>';
	$row .= generate_role_cell($user['role']);
	// $row .= '<td>' . implode(', ', $user['role']) . '</td>';
	return $row;
}
function generate_role_cell($roles) {
	$cell = '<td>';
	$nb = count($roles);
	for ($i = 0; $i < $nb; $i++) {
		if ($i) {
			$cell .= ', ';
		}
		$cell .= $roles[$i];
	}
	$cell .= '</td>';
	return $cell;
}
?>