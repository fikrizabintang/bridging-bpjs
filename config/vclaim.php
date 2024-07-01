<?php

return [
	'api' => [
		'endpoint'  => env('API_BPJS_VCLAIM','ENDPOINT-YOU'),
		'consid'  => env('CONS_ID','CONSID-YOU'),
		'secretkey' => env('SECRET_KEY', 'SECRET-YOU'),
		'userkey' => env('USER_KEY_VCLAIM', 'SECRET-YOU'),
	]
];