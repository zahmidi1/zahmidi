<?php


session_start();
ob_start();

include "./conn.php";
$db_id = $_SESSION['admin'];

$query = "SELECT * FROM users where id_user= $db_id";
$data = dataAccess::desplaydata($query);
$row_admin = $data->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);


if (isset($_POST['submit'])) {


	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$naissance = $_POST['naissance'];
	$email = $_POST['email'];
	$mobil = $_POST['mobil'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$pays = $_POST['pays'];

	$sql = "UPDATE `users` SET `nom` = '$nom', `prenom` = '$prenom', `email` = '$email', `telephone` = '$mobil', `naissance` = '$naissance', `pays` = '$pays', `ville` = '$ville', `Adresse` = '$adresse' WHERE `users`.`id_user` = $row_admin[0];";

	$query = dataAccess::update($sql);
	if (!empty($query)) {
		$_SESSION['success'] = 'Profil ' . $row_admin[7] . ' mis à jour avec succès';
	} else {
		$_SESSION['error'] = " erreur de mise à jour voutre Profil '.$row_admin[7].'";
	}
	header('location:../profile');
	return;
}


if (isset($_POST['savePaswored'])) {

	$curr_password = $_POST['curr_password'];
	$password = $_POST['password'];
	if (password_verify($curr_password, $row_admin[6])) {


		$password = password_hash($password, PASSWORD_DEFAULT);


		$sql = "UPDATE users SET   paswored = '$password' WHERE `users`.`id_user` = $row_admin[0] ";
		$query = dataAccess::update($sql);
		if (!empty($query)) {
			$_SESSION['success'] = 'mise à jour du Mot de passe réussie';
		} else {
			$_SESSION['error'] = "La mise à jour du mot de passe n'a pas réussi";
		}
	} else {
		$_SESSION['error'] = 'Mot de passe incorrect';
	}
	header('location:../profile');
} else {
	$_SESSION['error'] = "Remplissez d'abord les informations requises";
}
header('location:../profile');