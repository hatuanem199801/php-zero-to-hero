<?php

$products = [
	(object)[
		"name" => "Werzone file",
		"price" => 21000
	],
	(object)[
		"name" => "Initial project",
		"price" => 20000
	],
	(object)[
		"name" => "A deal with wezone",
		"price" => 11000
	],
];

$products[] = usort($products, function($a, $b) { return $a->name > $b->name; });
var_dump($products);