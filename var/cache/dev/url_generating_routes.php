<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_usuario_index' => [[], ['_controller' => 'App\\Controller\\UsuarioController::index'], [], [['text', '/usuario/list']], [], [], []],
    'app_usuario_new' => [[], ['_controller' => 'App\\Controller\\UsuarioController::new'], [], [['text', '/usuario/new']], [], [], []],
    'app_usuario_show' => [['id'], ['_controller' => 'App\\Controller\\UsuarioController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario']], [], [], []],
    'app_usuario_edit' => [['id'], ['_controller' => 'App\\Controller\\UsuarioController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/usuario']], [], [], []],
    'app_usuario_delete' => [['id'], ['_controller' => 'App\\Controller\\UsuarioController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/usuario']], [], [], []],
];
