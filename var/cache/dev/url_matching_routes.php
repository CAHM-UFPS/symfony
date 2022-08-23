<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/pedido/create' => [[['_route' => 'crear_pedido', '_controller' => 'App\\Controller\\PedidoController::create'], null, null, null, false, false, null]],
        '/usuario/list' => [[['_route' => 'app_usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, false, false, null]],
        '/usuario/new' => [[['_route' => 'app_usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/pedido/([^/]++)(*:58)'
                .'|/usuario/([^/]++)(?'
                    .'|(*:85)'
                    .'|/edit(*:97)'
                    .'|(*:104)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'leer_pedido', '_controller' => 'App\\Controller\\PedidoController::read'], ['email'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'app_usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        104 => [
            [['_route' => 'app_usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
