<?php

$routes->group('users', ['namespace' => 'Modules\Users\Controllers'], function ($routes) {
	$routes->add('login', 'Users::login');
	$routes->get('logout', 'Users::logout');
	$routes->add('forgot_password', 'Users::forgot_password');
	$routes->get('/', 'Users::index');
	$routes->add('create_user', 'Users::create_user');
	$routes->add('edit_user/(:num)', 'Users::edit_user/$1');
	$routes->add('create_group', 'Users::create_group');
	$routes->get('activate/(:num)', 'Users::activate/$1');
	$routes->get('activate/(:num)/(:hash)', 'Users::activate/$1/$2');
	$routes->add('deactivate/(:num)', 'Users::deactivate/$1');
	$routes->get('reset_password/(:hash)', 'Users::reset_password/$1');
	$routes->post('reset_password/(:hash)', 'Users::reset_password/$1');
	// ...
});