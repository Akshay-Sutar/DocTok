<?php
	
	$app->post('/user/getUserDetails', function ($request, $response, $args) {
	    $newResponse = $response->withHeader('Content-type', 'application/json')->withHeader('Access-Control-Allow-Origin', '*');

	    $aResponse = ['sUserName'=>'James Bond', 'iUserId'=>007];
        $newResponse = $newResponse->withJSON($aResponse);
        return $newResponse;	    
	});