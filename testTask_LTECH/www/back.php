
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$data = file_get_contents("php://input");
	$json = file_get_contents('config.json');
	$json = json_decode($json, true);
	$json[] = $data;
	$json = json_encode($json);
	file_put_contents('config.json', $json);
	echo $json;
}
?>
