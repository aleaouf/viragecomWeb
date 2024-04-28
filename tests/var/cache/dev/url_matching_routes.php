<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice' => [[['_route' => 'app_utilisateur_backoffice_dashboard', '_controller' => 'App\\Controller\\AdminUserController::backofficeDashboard'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/list' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espacepartenaire/notreEspace' => [[['_route' => 'app_espacepartenaire_show_accepted', '_controller' => 'App\\Controller\\EspacepartenaireController::showAcceptedEspacepartenaires'], null, ['GET' => 0], null, false, false, null]],
        '/espacepartenaire/new' => [[['_route' => 'app_new_espacepartenaire', '_controller' => 'App\\Controller\\EspacepartenaireController::newEspacepartenaire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espacepartenaire/Admin' => [[['_route' => 'app_espacepartenaire_index', '_controller' => 'App\\Controller\\EspacepartenaireController::indexEspacepartenaire'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_hello', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/list_users_front' => [[['_route' => 'app_list_users', '_controller' => 'App\\Controller\\HelloController::liste_users_front'], null, null, null, false, false, null]],
        '/hello1' => [[['_route' => 'app_hello1', '_controller' => 'App\\Controller\\HelloController::index1'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/backoffice' => [[['_route' => 'app_register_backoffice', '_controller' => 'App\\Controller\\RegistrationController::registerbackoffice'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'app_type_index', '_controller' => 'App\\Controller\\TypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/new' => [[['_route' => 'app_type_new', '_controller' => 'App\\Controller\\TypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/backoffice/home' => [[['_route' => 'app_utilisateur_backoffice', '_controller' => 'App\\Controller\\UserController::backoffice'], null, ['GET' => 0], null, false, false, null]],
        '/patients' => [[['_route' => 'app_patients', '_controller' => 'App\\Controller\\UserController::showPatients'], null, null, null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
        '/rendez/vous/stats' => [[['_route' => 'app_rendez_vous_stats', '_controller' => 'App\\Controller\\RendezVousController::stats'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/backoffice/user/([^/]++)/(?'
                    .'|ban(*:39)'
                    .'|unban(*:51)'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/espacepartenaire/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|accept(*:151)'
                            .'|edit(*:163)'
                        .')'
                        .'|(*:172)'
                    .')'
                    .'|user/([^/]++)(*:194)'
                    .'|notreEspace/([^/]++)(*:222)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:258)'
                        .'|/edit(*:271)'
                        .'|(*:279)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:305)'
                        .'|/edit(*:318)'
                        .'|(*:326)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:368)'
                .')'
                .'|/type/([^/]++)(?'
                    .'|(*:394)'
                    .'|/edit(*:407)'
                    .'|(*:415)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:436)'
                    .'|/(?'
                        .'|edit(*:452)'
                        .'|front/edit(*:470)'
                    .')'
                    .'|(*:479)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:516)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:555)'
                    .'|wdt/([^/]++)(*:575)'
                    .'|profiler(?'
                        .'|(*:594)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:632)'
                                .'|router(*:646)'
                                .'|exception(?'
                                    .'|(*:666)'
                                    .'|\\.css(*:679)'
                                .')'
                            .')'
                            .'|(*:689)'
                        .')'
                    .')'
                .')'
                .'|/pdf(*:704)'
                .'|/analyse/([^/]++)(*:729)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'admin_user_ban', '_controller' => 'App\\Controller\\AdminUserController::banUser'], ['id'], ['POST' => 0], null, false, false, null]],
        51 => [[['_route' => 'admin_user_unban', '_controller' => 'App\\Controller\\AdminUserController::unbanUser'], ['id'], ['POST' => 0], null, false, false, null]],
        81 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['idCategorie'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['idCategorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['idCategorie'], ['POST' => 0], null, false, true, null]],
        151 => [[['_route' => 'app_espacepartenaire_accept', '_controller' => 'App\\Controller\\EspacepartenaireController::acceptEspacepartenaire'], ['idEspace'], ['POST' => 0], null, false, false, null]],
        163 => [[['_route' => 'app_espacepartenaire_edit', '_controller' => 'App\\Controller\\EspacepartenaireController::editEspacepartenaire'], ['idEspace'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        172 => [
            [['_route' => 'app_espacepartenaire_show', '_controller' => 'App\\Controller\\EspacepartenaireController::showEspacepartenaire'], ['idEspace'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_espacepartenaire_delete', '_controller' => 'App\\Controller\\EspacepartenaireController::deleteEspacepartenaire'], ['idEspace'], ['POST' => 0], null, false, true, null],
        ],
        194 => [[['_route' => 'app_espacepartenaire_show_user', '_controller' => 'App\\Controller\\EspacepartenaireController::showEspacepartenairesForUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_espacepartenaire_usershow', '_controller' => 'App\\Controller\\EspacepartenaireController::showEspacepartenaire1'], ['idEspace'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['POST' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idReponse'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idReponse'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idReponse'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        394 => [[['_route' => 'app_type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['idType'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_type_edit', '_controller' => 'App\\Controller\\TypeController::edit'], ['idType'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'app_type_delete', '_controller' => 'App\\Controller\\TypeController::delete'], ['idType'], ['POST' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        470 => [[['_route' => 'app_utilisateur_front_edit', '_controller' => 'App\\Controller\\UserController::editfrontoffice'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        479 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        516 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        555 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        575 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        594 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        632 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        646 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        666 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        679 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        689 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        704 => [[['_route' => 'analyse_pdf', '_controller' => 'App\\Controller\\AnalyseController::pdf'], [], null, null, false, false, null]],
        729 => [
            [['_route' => 'analyse_detail', '_controller' => 'App\\Controller\\AnalyseController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
