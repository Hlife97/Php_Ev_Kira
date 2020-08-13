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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\Admin\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'admin_comment_new', '_controller' => 'App\\Controller\\Admin\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/ev' => [[['_route' => 'admin_ev_index', '_controller' => 'App\\Controller\\Admin\\EvController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ev/new' => [[['_route' => 'admin_ev_new', '_controller' => 'App\\Controller\\Admin\\EvController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages/new' => [[['_route' => 'admin_messages_new', '_controller' => 'App\\Controller\\Admin\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting/new' => [[['_route' => 'setting_new', '_controller' => 'App\\Controller\\Admin\\SettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/ev' => [
            [['_route' => 'user_ev_index', '_controller' => 'App\\Controller\\EvController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'user_ev', '_controller' => 'App\\Controller\\UserController::ev'], null, ['GET' => 0], null, false, false, null],
        ],
        '/user/ev/new' => [[['_route' => 'user_ev_new', '_controller' => 'App\\Controller\\EvController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'home_about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/image' => [[['_route' => 'user_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/sample' => [[['_route' => 'sample', '_controller' => 'App\\Controller\\SampleController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginuser' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::loginuser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/comments' => [[['_route' => 'user_comments', '_controller' => 'App\\Controller\\UserController::comments'], null, ['GET' => 0], null, false, false, null]],
        '/user/reservations' => [[['_route' => 'user_reservations', '_controller' => 'App\\Controller\\UserController::reservations'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|omment/([^/]++)(?'
                            .'|(*:250)'
                            .'|/edit(*:263)'
                            .'|(*:271)'
                        .')'
                    .')'
                    .'|ev/([^/]++)(?'
                        .'|(*:295)'
                        .'|/edit(*:308)'
                        .'|(*:316)'
                    .')'
                    .'|image/(?'
                        .'|new/([^/]++)(*:346)'
                        .'|([^/]++)(?'
                            .'|(*:365)'
                            .'|/(?'
                                .'|edit(*:381)'
                                .'|([^/]++)(*:397)'
                            .')'
                        .')'
                    .')'
                    .'|messages/([^/]++)(?'
                        .'|(*:428)'
                        .'|/edit(*:441)'
                        .'|(*:449)'
                    .')'
                    .'|setting/([^/]++)(?'
                        .'|(*:477)'
                        .'|/edit(*:490)'
                        .'|(*:498)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:523)'
                        .'|/edit(*:536)'
                        .'|(*:544)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|ev/([^/]++)(?'
                        .'|(*:577)'
                        .'|/edit(*:590)'
                        .'|(*:598)'
                    .')'
                    .'|image/(?'
                        .'|new/([^/]++)(*:628)'
                        .'|([^/]++)(?'
                            .'|(*:647)'
                            .'|/edit(*:660)'
                            .'|(*:668)'
                        .')'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:689)'
                        .'|/edit(*:702)'
                        .'|(*:710)'
                    .')'
                    .'|newcomment/([^/]++)(*:738)'
                .')'
                .'|/ev/([^/]++)(*:759)'
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
        202 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        250 => [[['_route' => 'admin_comment_show', '_controller' => 'App\\Controller\\Admin\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\Admin\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        295 => [[['_route' => 'admin_ev_show', '_controller' => 'App\\Controller\\Admin\\EvController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'admin_ev_edit', '_controller' => 'App\\Controller\\Admin\\EvController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'admin_ev_delete', '_controller' => 'App\\Controller\\Admin\\EvController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        346 => [[['_route' => 'admin_image_new', '_controller' => 'App\\Controller\\Admin\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        365 => [[['_route' => 'admin_image_show', '_controller' => 'App\\Controller\\Admin\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        381 => [[['_route' => 'admin_image_edit', '_controller' => 'App\\Controller\\Admin\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\ImageController::delete'], ['id', 'hid'], ['DELETE' => 0], null, false, true, null]],
        428 => [[['_route' => 'admin_messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'admin_messages_edit', '_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [[['_route' => 'admin_messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        477 => [[['_route' => 'setting_show', '_controller' => 'App\\Controller\\Admin\\SettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        490 => [[['_route' => 'setting_edit', '_controller' => 'App\\Controller\\Admin\\SettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        498 => [[['_route' => 'setting_delete', '_controller' => 'App\\Controller\\Admin\\SettingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        523 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        577 => [[['_route' => 'user_ev_show', '_controller' => 'App\\Controller\\EvController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        590 => [[['_route' => 'user_ev_edit', '_controller' => 'App\\Controller\\EvController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        598 => [[['_route' => 'user_ev_delete', '_controller' => 'App\\Controller\\EvController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        628 => [[['_route' => 'user_image_new', '_controller' => 'App\\Controller\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        647 => [[['_route' => 'user_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        660 => [[['_route' => 'user_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        668 => [[['_route' => 'user_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        689 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        702 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        710 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        738 => [[['_route' => 'user_new_comment', '_controller' => 'App\\Controller\\UserController::newcomment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        759 => [
            [['_route' => 'ev_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
