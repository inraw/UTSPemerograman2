<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dosen', 'Dosen::index');
$routes->get('/staff', 'Staff::index');
$routes->get('/user', 'User::index');
$routes->get('/tambah_dosen', 'Dosen::tambah');
$routes->post('/dosen/simpan', 'Dosen::simpan');
$routes->get('/tambah_staff', 'Staff::tambah');
$routes->post('/staff/simpan', 'Staff::simpan');
$routes->get('/tambah_user', 'User::tambah');
$routes->post('/user/simpan', 'User::simpan');
$routes->get('/dosen/hapus/(:num)', 'Dosen::hapus/$1');
$routes->get('/staff/hapus/(:num)', 'Staff::hapus/$1');
$routes->get('/user/hapus/(:num)', 'User::hapus/$1');
$routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->get('/staff/edit/(:num)', 'Staff::edit/$1');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/dosen/simpanEdit/(:num)', 'Dosen::simpanEdit/$1');
$routes->post('/staff/simpanEdit/(:num)', 'Staff::simpanEdit/$1');
$routes->post('/user/simpanEdit/(:num)', 'User::simpanEdit/$1');




