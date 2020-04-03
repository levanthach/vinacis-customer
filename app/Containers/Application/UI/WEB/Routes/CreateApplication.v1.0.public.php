<?php

/** @var Route $router */
$router->post('applications', [
    'as' => 'web_application_create_new_application',
    'uses'  => 'Controller@createNewApplication',
    'middleware' => [
      'auth:web',
    ],
]);

$router->get('/login','AdminLoginController@login');
$router->get('/register','AdminLoginController@register');
$router->get('recover-password','AdminLoginController@recover_password');
$router->get('/dashboard', 'CreateApplication@dashboard');
$router->get('/{page}', 'CreateApplication@dashboard_page');
$router->get('/admin/{page}','CreateApplication@admin_page');

