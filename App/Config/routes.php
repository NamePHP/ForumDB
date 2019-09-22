<?php

use \Controller\defaultController;
use \Controller\loginController;
use \Controller\registerController;
use \Controller\mainController;

return [
    'homepage' =>[
        'pattern' => '/',
        'controller' => defaultController::class,
        'action' => 'indexAction'
    ],
    'login' =>[
        'pattern' => '/login',
        'controller' => loginController::class,
        'action' => 'logAction'
    ],
    'register' =>[
        'pattern' => '/register',
        'controller' => registerController::class,
        'action' => 'contactAction'
    ],
    'main' =>[
        'pattern' => '/main',
        'controller' => mainController::class,
        'action' => 'mainAction'
    ],
];