<?php

	function valid_login($username, $password) {
		if ($_POST['username'] == 'testusername' && $_POST['password'] == 'testpassword') {
			return true;
		} else {
			return false;
		}
	}

?>