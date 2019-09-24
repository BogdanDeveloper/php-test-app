<?php 
	define("NAV_DATA", [[
		'title' => "Home",
		'link' => 'index.php'
	], [
		'title' => "Services",
		'link' => 'services.php',
		'children' => [[
			'title' => 'Design',
			'link' => 'design.php'
		], [
			'title' => 'Building',
			'link' => 'building.php'
		]]
	], [
		'title' => 'Blog',
		'link' => 'blog.php'
	]]);
 ?>