<?php


$my_girl = array(

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
  'role' => array('webaster','chef'),
  ),
);


$markup = '<table class="table table-hover">';
$markup .= '<thead> <tr> <th>#</th> <th>Name</th> <th>Email</th> <th>role</th></tr> </thead>';
$markup .= '<tbody>';


foreach($my_girl as $girl) {
    $markup .= '<tr>';
    $markup .= generate_user_row($girl);
    $markup .= '</tr>';
}

$markup .= '</tbody>';
$markup .= '</table>';
print $markup;


function generate_user_row($girl) {
	return '<th scope="row">' . $girl['id'] . '</th><td>' . $girl['name'] . '</td><td>' . $girl['mail'] .  '</td><td>'. $girl['role'][0] .  '</td>';
}


?>
