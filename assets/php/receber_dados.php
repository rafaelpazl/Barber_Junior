<?php
include_once('config.php');

// Verificar se há cookies do Google e do Facebook
$googleUserID = $_COOKIE['googleUserID'] ?? '';
$googleUserName = $_COOKIE['googleUserName'] ?? '';
$facebookUserID = $_COOKIE['facebookUserID'] ?? '';
$facebookUserName = $_COOKIE['facebookUserName'] ?? '';

// Verificar se há credenciais do Google
if (!empty($googleUserID) && !empty($googleUserName)) {
	// Verificar se o usuário já existe no banco de dados
	$query = "SELECT * FROM usuarios WHERE google_user_id = '$googleUserID'";
	$result = mysqli_query($conexao, $query);

	if (mysqli_num_rows($result) == 0) {
		// Inserir novo usuário com credenciais do Google no banco de dados
		$query = "INSERT INTO usuarios (google_user_id, nome) VALUES ('$googleUserID', '$googleUserName')";
		mysqli_query($conexao, $query);
	}
}

// Verificar se há credenciais do Facebook
if (!empty($facebookUserID) && !empty($facebookUserName)) {
	// Verificar se o usuário já existe no banco de dados
	$query = "SELECT * FROM usuarios WHERE facebook_user_id = '$facebookUserID'";
	$result = mysqli_query($conexao, $query);

	if (mysqli_num_rows($result) == 0) {
		// Inserir novo usuário com credenciais do Facebook no banco de dados
		$query = "INSERT INTO usuarios (facebook_user_id, nome) VALUES ('$facebookUserID', '$facebookUserName')";
		mysqli_query($conexao, $query);
	}
}
header('Location: ../../pages/sistemausuario.php');
exit();
?>
