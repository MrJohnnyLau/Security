<?php

	// Database Credentials
	define('DB_HOST', 'localhost');
	define('DB_DATABASE', 'account');
	define('DB_USERNAME', 'admin');
	define('DB_PASSWORD', 'Qwer1234*');

	// Email Credentials
	define('SMTP_HOST', 'smtp.gmail.com');
	define('SMTP_PORT', 465);
	define('SMTP_USERNAME', 'mrjohnnylau@gmail.com');
	define('SMTP_PASSWORD', 'fwuftyxefipbpsol');
	define('SMTP_FROM', 'noreply@hkgovernment.com');
	define('SMTP_FROM_NAME', 'Immigration Department');

	// Global Variables
	define('MAX_LOGIN_ATTEMPTS_PER_HOUR', 5);
	define('MAX_EMAIL_VERIFICATION_REQUESTS_PER_DAY', 3);
	define('MAX_PASSWORD_RESET_REQUESTS_PER_DAY', 3);
	define('PASSWORD_RESET_REQUEST_EXPIRY_TIME', 60*60);
	define('CSRF_TOKEN_SECRET', 'THISISCSRFTOKENSECRET');
	define('VALIDATE_EMAIL_ENDPOINT', 'https://www.shape-myapiproject.link/validate'); #Do not include trailing /
	define('RESET_PASSWORD_ENDPOINT', 'https://www.shape-myapiproject.link/resetpassword'); #Do not include trailing /

	// Code we want to run on every page/script
	date_default_timezone_set('UTC'); 
	error_reporting(0);
	session_set_cookie_params(['samesite' => 'Strict']);
	session_start();
	
