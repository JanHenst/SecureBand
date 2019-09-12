<?php

class HomeController {

	function homepage(){

		require __DIR__ . '/../views/homepage/header.php';
		require __DIR__ . '/../views/homepage/search.php';
		require __DIR__ . '/../views/homepage/footer.php';

	}

}
