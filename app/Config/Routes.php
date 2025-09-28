<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//USER
$routes->get('/', 'Home::accueil');
$routes->get('inscription', 'Home::inscription');
$routes->post('inscription', 'Home::sinscrire');
$routes->get('seconnecter', 'Home::seconnecter');
$routes->post('seconnecter', 'Home::connexion');
$routes->get('accueil', 'Home::accueil');
$routes->get('affichage_certificat_vie', 'Vie::affichageCertificatVie');
$routes->get('formulaire_vie', 'Vie::certificatVie');
$routes->post('/Vie/affichage_certificat_vie', 'Vie::genererCertificatVie');
$routes->get('/residence', 'Residence::index');
$routes->post('/Residence/affichage_certificat_residence', 'Residence::genererCertificatResidence');
$routes->get('enregistrement', 'Home::enregistrement');
$routes->post('enregistrement', 'Home::ajoutHabitant');
$routes->get('formulaire_deces','Deces::certificatDeces');
$routes->post('/Deces/affichage_certificat_deces','Deces::genererCertificatDeces');
$routes->get('formulaire_demenagement','Demenagement::certificatDemenagement');
$routes->post('/Demenagement/affichage_certificat_demenagement','Demenagement::genererCertificatDemenagement');
$routes->post('formulaire_demenagement','Demenagement::genererCertificatDemenagement');
$routes->get('/deconnexion','Home::deconnexion');

//ADMIN
$routes->get('/adminInscription', 'AdminInscription::index');
$routes->post('/adminInscription/submit', 'AdminInscription::submit');
$routes->get('/adminConnexion', 'AdminConnexion::index');
$routes->post('/adminConnexion', 'AdminConnexion::submit');
$routes->get('/adminConnexion/logout', 'AdminConnexion::logout');
$routes->get('/adminDashboard', 'AdminDashboard::index');
$routes->get('adminDashboard/getDetails/(:any)', 'AdminDashboard::getDetails/$1');
$routes->get('/mponina', 'Mponina::index');
$routes->post('/mponina/update', 'Mponina::update');
$routes->post('/mponina/delete', 'Mponina::delete');
$routes->get('/antotanisa', 'Antotanisa::index');
$routes->get('/fanampidirana', 'Fanampidirana::index');
$routes->post('/fanampidirana/ajoutHabitant', 'Fanampidirana::ajoutHabitant');


