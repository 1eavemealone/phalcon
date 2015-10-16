<?php

$router = new \Phalcon\Mvc\Router();

$router->add('/account/edit', array(
    'controller' => 'account',
    'action' => 'profile',
));

$router->add('/logout', array(
    'controller' => 'auth',
    'action' => 'logout',
));

return $router;