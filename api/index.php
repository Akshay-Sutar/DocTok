<?php

	require_once __DIR__.'/../../vendor/autoload.php';
	$oAPI = new Slim\App();

	$app->get('/', function ($request, $response, $args) {
		$newResponse = $response->withHeader('Content-type', 'application/json')->withHeader('Access-Control-Allow-Origin', '*');
		$newResponse = $newResponse->withJSON("Welcome!");
		return $newResponse;	
	});