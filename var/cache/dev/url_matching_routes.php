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
        '/civilisation' => [[['_route' => 'app_civilisation_index', '_controller' => 'App\\Controller\\CivilisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/civilisation/back' => [[['_route' => 'app_civilisation_index_back', '_controller' => 'App\\Controller\\CivilisationController::index_back'], null, ['GET' => 0], null, false, false, null]],
        '/civilisation/new' => [[['_route' => 'app_civilisation_new', '_controller' => 'App\\Controller\\CivilisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/findguide' => [[['_route' => 'app_find_guide', '_controller' => 'App\\Controller\\FindGuideController::index'], null, null, null, false, false, null]],
        '/guidedetails' => [[['_route' => 'app_guidedetails', '_controller' => 'App\\Controller\\GuidedetailsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hotel/new' => [[['_route' => 'app_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/programe' => [[['_route' => 'app_programe_index', '_controller' => 'App\\Controller\\ProgrameController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programe/back' => [[['_route' => 'app_programe_index_back', '_controller' => 'App\\Controller\\ProgrameController::index_back'], null, ['GET' => 0], null, false, false, null]],
        '/programe/new' => [[['_route' => 'app_programe_new', '_controller' => 'App\\Controller\\ProgrameController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/hotel' => [[['_route' => 'app_reservation_hotel_index', '_controller' => 'App\\Controller\\ReservationHotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/hotel/admin/list' => [[['_route' => 'app_reservation_hotel_admin_list', '_controller' => 'App\\Controller\\ReservationHotelController::listadmin'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/programme' => [[['_route' => 'app_reservation_programme_index', '_controller' => 'App\\Controller\\ReservationProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/programme/admin/list' => [[['_route' => 'app_reservation_programme_list_admin', '_controller' => 'App\\Controller\\ReservationProgrammeController::listAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/restaurant' => [[['_route' => 'app_reservation_restaurant_index', '_controller' => 'App\\Controller\\ReservationRestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/restaurant/admin/list' => [[['_route' => 'app_reservation_restaurant_list_admin', '_controller' => 'App\\Controller\\ReservationRestaurantController::listadmin'], null, ['GET' => 0], null, false, false, null]],
        '/restaurantList' => [[['_route' => 'app_restaurant_list', '_controller' => 'App\\Controller\\RestaurantController::index'], null, null, null, false, false, null]],
        '/sign/up' => [[['_route' => 'app_sign_up', '_controller' => 'App\\Controller\\SignUpController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/civilisation/(?'
                    .'|([^/]++)(*:227)'
                    .'|front/([^/]++)(*:249)'
                    .'|([^/]++)(?'
                        .'|/edit(*:273)'
                        .'|(*:281)'
                    .')'
                .')'
                .'|/hotel/([^/]++)(?'
                    .'|(*:309)'
                    .'|/edit(*:322)'
                    .'|(*:330)'
                .')'
                .'|/programe/(?'
                    .'|([^/]++)(*:360)'
                    .'|front/([^/]++)(*:382)'
                    .'|([^/]++)(?'
                        .'|/edit(*:406)'
                        .'|(*:414)'
                    .')'
                .')'
                .'|/reservation/(?'
                    .'|hotel/(?'
                        .'|new/([^/]++)(*:461)'
                        .'|([^/]++)(?'
                            .'|(*:480)'
                            .'|/edit(*:493)'
                            .'|(*:501)'
                        .')'
                    .')'
                    .'|programme/(?'
                        .'|new/([^/]++)(*:536)'
                        .'|([^/]++)(?'
                            .'|(*:555)'
                            .'|/edit(*:568)'
                            .'|(*:576)'
                        .')'
                    .')'
                    .'|restaurant/(?'
                        .'|new/([^/]++)(*:612)'
                        .'|([^/]++)(?'
                            .'|(*:631)'
                            .'|/edit(*:644)'
                            .'|(*:652)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'app_civilisation_show', '_controller' => 'App\\Controller\\CivilisationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'app_civilisation_sfront', '_controller' => 'App\\Controller\\CivilisationController::show_front'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_civilisation_edit', '_controller' => 'App\\Controller\\CivilisationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'app_civilisation_delete', '_controller' => 'App\\Controller\\CivilisationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [[['_route' => 'app_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_programe_show', '_controller' => 'App\\Controller\\ProgrameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_programe_show_front', '_controller' => 'App\\Controller\\ProgrameController::show_front'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_programe_edit', '_controller' => 'App\\Controller\\ProgrameController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'app_programe_delete', '_controller' => 'App\\Controller\\ProgrameController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_reservation_hotel_new', '_controller' => 'App\\Controller\\ReservationHotelController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        480 => [[['_route' => 'app_reservation_hotel_show', '_controller' => 'App\\Controller\\ReservationHotelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        493 => [[['_route' => 'app_reservation_hotel_edit', '_controller' => 'App\\Controller\\ReservationHotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'app_reservation_hotel_delete', '_controller' => 'App\\Controller\\ReservationHotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_reservation_programme_new', '_controller' => 'App\\Controller\\ReservationProgrammeController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        555 => [[['_route' => 'app_reservation_programme_show', '_controller' => 'App\\Controller\\ReservationProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        568 => [[['_route' => 'app_reservation_programme_edit', '_controller' => 'App\\Controller\\ReservationProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'app_reservation_programme_delete', '_controller' => 'App\\Controller\\ReservationProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        612 => [[['_route' => 'app_reservation_restaurant_new', '_controller' => 'App\\Controller\\ReservationRestaurantController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        631 => [[['_route' => 'app_reservation_restaurant_show', '_controller' => 'App\\Controller\\ReservationRestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        644 => [[['_route' => 'app_reservation_restaurant_edit', '_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        652 => [
            [['_route' => 'app_reservation_restaurant_delete', '_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
