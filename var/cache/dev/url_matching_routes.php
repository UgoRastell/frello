<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_board_index', '_controller' => 'App\\Controller\\BoardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_board_new', '_controller' => 'App\\Controller\\BoardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/auth/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/task/new' => [[['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/taskList/new' => [[['_route' => 'app_task_list_new', '_controller' => 'App\\Controller\\TaskListController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:181)'
                    .'|/edit(*:194)'
                    .'|(*:202)'
                .')'
                .'|/task(?'
                    .'|(*:219)'
                    .'|/([^/]++)(?'
                        .'|(*:239)'
                        .'|/edit(*:252)'
                        .'|(*:260)'
                    .')'
                    .'|List(?'
                        .'|(*:276)'
                        .'|/([^/]++)(?'
                            .'|(*:296)'
                            .'|/edit(*:309)'
                            .'|(*:317)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        181 => [[['_route' => 'app_board_show', '_controller' => 'App\\Controller\\BoardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        194 => [[['_route' => 'app_board_edit', '_controller' => 'App\\Controller\\BoardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'app_board_delete', '_controller' => 'App\\Controller\\BoardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_task_index', '_controller' => 'App\\Controller\\TaskController::index'], [], ['GET' => 0], null, true, false, null]],
        239 => [[['_route' => 'app_task_show', '_controller' => 'App\\Controller\\TaskController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => 'app_task_list_index', '_controller' => 'App\\Controller\\TaskListController::index'], [], ['GET' => 0], null, true, false, null]],
        296 => [[['_route' => 'app_task_list_show', '_controller' => 'App\\Controller\\TaskListController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_task_list_edit', '_controller' => 'App\\Controller\\TaskListController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [
            [['_route' => 'app_task_list_delete', '_controller' => 'App\\Controller\\TaskListController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
