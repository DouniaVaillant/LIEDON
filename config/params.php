<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'liedon',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'LIEDON',
        'projectBaseUrl' => 'http://localhost/LIEDON'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '\\..\\';
const BASE = CONFIG['app']['projectBaseUrl'] . '/public/';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';


/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                              => ['AppController', 'index'],
    '/'                             => ['AppController', 'index'],
    '/user/registration'            => ['AppController', 'registration'],
    '/user/logIn'                   => ['AppController', 'logIn'],
    '/user/logOut'                  => ['AppController', 'logOut'],


    '/admin/backoffice'             => ['AppController', 'backoffice'],
    '/admin/user/list'              => ['AppController', 'listUser'],
    '/admin/user/add'               => ['AppController', 'addUser'],
    '/admin/user/edit'              => ['AppController', 'editUser'],
    '/admin/user/delete'            => ['AppController', 'deleteUser'],
    '/admin/category/list'          => ['AppController', 'listCategory'],
    '/admin/category/add'           => ['AppController', 'addCategory'],
    '/admin/category/edit'          => ['AppController', 'editCategory'],
    '/admin/category/delete'        => ['AppController', 'deleteCategory'],
    '/admin/target-reader/list'     => ['AppController', 'listTargetReader'],
    '/admin/target-reader/add'      => ['AppController', 'addTargetReader'],
    '/admin/target-reader/edit'     => ['AppController', 'editTargetReader'],
    '/admin/target-reader/delete'   => ['AppController', 'deleteTargetReader'],
    '/admin/book/list'              => ['AppController', 'listBook'],
    '/admin/book/add'               => ['AppController', 'addBook'],
    '/admin/book/edit'              => ['AppController', 'editBook'],
    '/admin/book/delete'            => ['AppController', 'deleteBook'],
    
    '/user/profile'                 => ['AppController', 'profile'],
    '/user/profile/edit'            => ['AppController', 'editProfile'],
    '/user/editPassword'            => ['AppController', 'editPassword'],
    
    '/books'                        => ['AppController', 'books'],
    '/user/books'                   => ['AppController', 'userBook'],
    '/book/show'                    => ['AppController', 'showBook'],
    '/book/add'                     => ['AppController', 'addBook'],
    '/user/books/edit'              => ['AppController', 'editUserBook'],


];
