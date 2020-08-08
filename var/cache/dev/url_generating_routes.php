<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'admin_category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'admin_category_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'admin_ev_index' => [[], ['_controller' => 'App\\Controller\\Admin\\EvController::index'], [], [['text', '/admin/ev/']], [], []],
    'admin_ev_new' => [[], ['_controller' => 'App\\Controller\\Admin\\EvController::new'], [], [['text', '/admin/ev/new']], [], []],
    'admin_ev_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EvController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ev']], [], []],
    'admin_ev_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EvController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ev']], [], []],
    'admin_ev_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\EvController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ev']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'sample' => [[], ['_controller' => 'App\\Controller\\SampleController::index'], [], [['text', '/sample']], [], []],
];
