<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.openf1.org/v1/drivers?driver_number=1&session_key=9158",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$objeto = json_decode($response);

	echo "<b>Informacion del piloto de F1:</b><br><br>";
	echo "<b>Nombre de transmision: </b>" . $objeto[0]->broadcast_name . "<br>";
	echo "<b>Codigo de pais: </b>" . $objeto[0]->country_code . "<br>";
	echo "<b>Numero de piloto: </b>" . $objeto[0]->driver_number . "<br>";
	echo "<b>Nombre: </b>" . $objeto[0]->first_name . "<br>";
	echo "<b>Nombre completo: </b>" . $objeto[0]->full_name . "<br>";
	echo "<b>Url de foto: </b>" . $objeto[0]->headshot_url . "<br>";
	echo "<b>Apellido: </b>" . $objeto[0]->last_name . "<br>";
	echo "<b>Clave de reunion: </b>" . $objeto[0]->meeting_key . "<br>";
	echo "<b>Nombre acronimo: </b>" . $objeto[0]->name_acronym . "<br>";
	echo "<b>Clave de sesion: </b>" . $objeto[0]->session_key . "<br>";
	echo "<b>Color del equipo: </b>" . $objeto[0]->team_colour . "<br>";
	echo "<b>Nombre del equipo: </b>" . $objeto[0]->team_name . "<br>";
}
?>