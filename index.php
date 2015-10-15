<?php

	function validate($user , $psw) {

		$mistakes = [];

		if ( empty ( $user ) ) {
			$mistakes['user-empty'] = true;
		}
		if ( empty ( $psw ) ) {
			$mistakes['psw-empty'] = true;
		}

		return $mistakes;

	}


	if ( !$_POST ) {

		require_once 'login.html.php';

	} else {

		$user=htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');
		$psw=htmlspecialchars($_POST['psw'], ENT_QUOTES, 'UTF-8');

		if ( $mistakes = validate($user, $psw) ) {

			require_once 'login.html.php';

		} else {

			include 'main.html.php';

		}

	}

?>