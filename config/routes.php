<?php
use Cake\Routing\Router;

Router::plugin('SimpleBlog', function ($routes) {
    $routes->prefix('admin', function ($routes) {
        $routes->fallbacks('InflectedRoute');
    });
    $routes->fallbacks('InflectedRoute');
});