<?php

	function valid_login($username, $password) {
		if ($username == 'testusername' && $password == 'testpassword') {
			return true;
		} else {
			return false;
		}
	}

?>