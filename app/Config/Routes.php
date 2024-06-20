<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

$routes->get('/cadastro', 'Main::cadastro');

$routes->get('/mainpage', 'Mainpage::index');

$routes->get('/meuPerfil', 'Perfil::index');

$routes->get('/logout', 'Main::closeSession');

$routes->post('/login_submit', 'Login::login_submit');

$routes->post('/cadastrar', 'Cadastro::cadastrar');

$routes->post('/edicao', 'Editar::index');

$routes->post('/delete', 'Delete::index');

$routes->post('/postar', 'Postar::index');