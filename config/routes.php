<?php
use Cake\Routing\Router;

Router::plugin('SimpleBlog', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});