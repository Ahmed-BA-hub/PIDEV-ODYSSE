<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_civilisation_index' => [[], ['_controller' => 'App\\Controller\\CivilisationController::index'], [], [['text', '/civilisation/']], [], [], []],
    'app_civilisation_index_back' => [[], ['_controller' => 'App\\Controller\\CivilisationController::index_back'], [], [['text', '/civilisation/back']], [], [], []],
    'app_civilisation_new' => [[], ['_controller' => 'App\\Controller\\CivilisationController::new'], [], [['text', '/civilisation/new']], [], [], []],
    'app_civilisation_show' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'app_civilisation_sfront' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::show_front'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation/front']], [], [], []],
    'app_civilisation_edit' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'app_civilisation_delete' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'app_find_guide' => [[], ['_controller' => 'App\\Controller\\FindGuideController::index'], [], [['text', '/findguide']], [], [], []],
    'app_guidedetails' => [[], ['_controller' => 'App\\Controller\\GuidedetailsController::index'], [], [['text', '/guidedetails']], [], [], []],
    'app_home_page' => [[], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['text', '/']], [], [], []],
    'app_hotel_index' => [[], ['_controller' => 'App\\Controller\\HotelController::index'], [], [['text', '/hotel/']], [], [], []],
    'app_hotel_new' => [[], ['_controller' => 'App\\Controller\\HotelController::new'], [], [['text', '/hotel/new']], [], [], []],
    'app_hotel_show' => [['id'], ['_controller' => 'App\\Controller\\HotelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'app_hotel_edit' => [['id'], ['_controller' => 'App\\Controller\\HotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'app_hotel_delete' => [['id'], ['_controller' => 'App\\Controller\\HotelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_programe_index' => [[], ['_controller' => 'App\\Controller\\ProgrameController::index'], [], [['text', '/programe/']], [], [], []],
    'app_programe_index_back' => [[], ['_controller' => 'App\\Controller\\ProgrameController::index_back'], [], [['text', '/programe/back']], [], [], []],
    'app_programe_new' => [[], ['_controller' => 'App\\Controller\\ProgrameController::new'], [], [['text', '/programe/new']], [], [], []],
    'app_programe_show' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'app_programe_show_front' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::show_front'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe/front']], [], [], []],
    'app_programe_edit' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'app_programe_delete' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'app_reservation_hotel_index' => [[], ['_controller' => 'App\\Controller\\ReservationHotelController::index'], [], [['text', '/reservation/hotel/']], [], [], []],
    'app_reservation_hotel_admin_list' => [[], ['_controller' => 'App\\Controller\\ReservationHotelController::listadmin'], [], [['text', '/reservation/hotel/admin/list']], [], [], []],
    'app_reservation_hotel_new' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel/new']], [], [], []],
    'app_reservation_hotel_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'app_reservation_hotel_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'app_reservation_hotel_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'app_reservation_programme_index' => [[], ['_controller' => 'App\\Controller\\ReservationProgrammeController::index'], [], [['text', '/reservation/programme/']], [], [], []],
    'app_reservation_programme_list_admin' => [[], ['_controller' => 'App\\Controller\\ReservationProgrammeController::listAdmin'], [], [['text', '/reservation/programme/admin/list']], [], [], []],
    'app_reservation_programme_new' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme/new']], [], [], []],
    'app_reservation_programme_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'app_reservation_programme_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'app_reservation_programme_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'app_reservation_restaurant_index' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::index'], [], [['text', '/reservation/restaurant/']], [], [], []],
    'app_reservation_restaurant_list_admin' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::listadmin'], [], [['text', '/reservation/restaurant/admin/list']], [], [], []],
    'app_reservation_restaurant_new' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant/new']], [], [], []],
    'app_reservation_restaurant_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'app_reservation_restaurant_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'app_reservation_restaurant_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'app_restaurant_list' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index'], [], [['text', '/restaurantList']], [], [], []],
    'app_sign_up' => [[], ['_controller' => 'App\\Controller\\SignUpController::index'], [], [['text', '/sign/up']], [], [], []],
    'App\Controller\CivilisationController::index' => [[], ['_controller' => 'App\\Controller\\CivilisationController::index'], [], [['text', '/civilisation/']], [], [], []],
    'App\Controller\CivilisationController::index_back' => [[], ['_controller' => 'App\\Controller\\CivilisationController::index_back'], [], [['text', '/civilisation/back']], [], [], []],
    'App\Controller\CivilisationController::new' => [[], ['_controller' => 'App\\Controller\\CivilisationController::new'], [], [['text', '/civilisation/new']], [], [], []],
    'App\Controller\CivilisationController::show' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'App\Controller\CivilisationController::show_front' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::show_front'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation/front']], [], [], []],
    'App\Controller\CivilisationController::edit' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'App\Controller\CivilisationController::delete' => [['id'], ['_controller' => 'App\\Controller\\CivilisationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/civilisation']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\FindGuideController::index' => [[], ['_controller' => 'App\\Controller\\FindGuideController::index'], [], [['text', '/findguide']], [], [], []],
    'App\Controller\GuidedetailsController::index' => [[], ['_controller' => 'App\\Controller\\GuidedetailsController::index'], [], [['text', '/guidedetails']], [], [], []],
    'App\Controller\HomePageController::index' => [[], ['_controller' => 'App\\Controller\\HomePageController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\HotelController::index' => [[], ['_controller' => 'App\\Controller\\HotelController::index'], [], [['text', '/hotel/']], [], [], []],
    'App\Controller\HotelController::new' => [[], ['_controller' => 'App\\Controller\\HotelController::new'], [], [['text', '/hotel/new']], [], [], []],
    'App\Controller\HotelController::show' => [['id'], ['_controller' => 'App\\Controller\\HotelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'App\Controller\HotelController::edit' => [['id'], ['_controller' => 'App\\Controller\\HotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'App\Controller\HotelController::delete' => [['id'], ['_controller' => 'App\\Controller\\HotelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hotel']], [], [], []],
    'App\Controller\LoginController::index' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'App\Controller\ProgrameController::index' => [[], ['_controller' => 'App\\Controller\\ProgrameController::index'], [], [['text', '/programe/']], [], [], []],
    'App\Controller\ProgrameController::index_back' => [[], ['_controller' => 'App\\Controller\\ProgrameController::index_back'], [], [['text', '/programe/back']], [], [], []],
    'App\Controller\ProgrameController::new' => [[], ['_controller' => 'App\\Controller\\ProgrameController::new'], [], [['text', '/programe/new']], [], [], []],
    'App\Controller\ProgrameController::show' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'App\Controller\ProgrameController::show_front' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::show_front'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe/front']], [], [], []],
    'App\Controller\ProgrameController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'App\Controller\ProgrameController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProgrameController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/programe']], [], [], []],
    'App\Controller\ReservationHotelController::index' => [[], ['_controller' => 'App\\Controller\\ReservationHotelController::index'], [], [['text', '/reservation/hotel/']], [], [], []],
    'App\Controller\ReservationHotelController::listadmin' => [[], ['_controller' => 'App\\Controller\\ReservationHotelController::listadmin'], [], [['text', '/reservation/hotel/admin/list']], [], [], []],
    'App\Controller\ReservationHotelController::new' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel/new']], [], [], []],
    'App\Controller\ReservationHotelController::show' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'App\Controller\ReservationHotelController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'App\Controller\ReservationHotelController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationHotelController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/hotel']], [], [], []],
    'App\Controller\ReservationProgrammeController::index' => [[], ['_controller' => 'App\\Controller\\ReservationProgrammeController::index'], [], [['text', '/reservation/programme/']], [], [], []],
    'App\Controller\ReservationProgrammeController::listAdmin' => [[], ['_controller' => 'App\\Controller\\ReservationProgrammeController::listAdmin'], [], [['text', '/reservation/programme/admin/list']], [], [], []],
    'App\Controller\ReservationProgrammeController::new' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme/new']], [], [], []],
    'App\Controller\ReservationProgrammeController::show' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'App\Controller\ReservationProgrammeController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'App\Controller\ReservationProgrammeController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationProgrammeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/programme']], [], [], []],
    'App\Controller\ReservationRestaurantController::index' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::index'], [], [['text', '/reservation/restaurant/']], [], [], []],
    'App\Controller\ReservationRestaurantController::listadmin' => [[], ['_controller' => 'App\\Controller\\ReservationRestaurantController::listadmin'], [], [['text', '/reservation/restaurant/admin/list']], [], [], []],
    'App\Controller\ReservationRestaurantController::new' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant/new']], [], [], []],
    'App\Controller\ReservationRestaurantController::show' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'App\Controller\ReservationRestaurantController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'App\Controller\ReservationRestaurantController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation/restaurant']], [], [], []],
    'App\Controller\RestaurantController::index' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index'], [], [['text', '/restaurantList']], [], [], []],
    'App\Controller\SignUpController::index' => [[], ['_controller' => 'App\\Controller\\SignUpController::index'], [], [['text', '/sign/up']], [], [], []],
];
