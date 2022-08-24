<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/pedido/create' => [[['_route' => 'crear_pedido', '_controller' => 'App\\Controller\\PedidoController::create'], null, ['POST' => 0], null, false, false, null]],
        '/pedido/listar' => [[['_route' => 'list_pedidos', '_controller' => 'App\\Controller\\PedidoController::list'], null, ['GET' => 0], null, false, false, null]],
        '/usuario/list' => [[['_route' => 'app_usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, false, false, null]],
        '/usuario/new' => [[['_route' => 'app_usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/pedido/(?'
                    .'|([^/]++)(*:61)'
                    .'|editar/([^/]++)(*:83)'
                    .'|([^/]++)(*:98)'
                .')'
                .'|/usuario/([^/]++)(?'
                    .'|(*:126)'
                    .'|/edit(*:139)'
                    .'|(*:147)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'leer_pedido', '_controller' => 'App\\Controller\\PedidoController::read'], ['email'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'editar_pedido', '_controller' => 'App\\Controller\\PedidoController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        98 => [[['_route' => 'delete_pedido', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['email'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        147 => [
            [['_route' => 'app_usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
