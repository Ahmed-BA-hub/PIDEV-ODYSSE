<?php

namespace ContainerLcO4fHy;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y_RceLSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y.RceLS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y.RceLS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CivilisationController::delete' => ['privates', '.service_locator.6WpbVPW', 'get_ServiceLocator_6WpbVPWService', true],
            'App\\Controller\\CivilisationController::edit' => ['privates', '.service_locator.6WpbVPW', 'get_ServiceLocator_6WpbVPWService', true],
            'App\\Controller\\CivilisationController::index' => ['privates', '.service_locator.qVDZ2Rp', 'get_ServiceLocator_QVDZ2RpService', true],
            'App\\Controller\\CivilisationController::index_back' => ['privates', '.service_locator.qVDZ2Rp', 'get_ServiceLocator_QVDZ2RpService', true],
            'App\\Controller\\CivilisationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CivilisationController::show' => ['privates', '.service_locator.pgDvz2b', 'get_ServiceLocator_PgDvz2bService', true],
            'App\\Controller\\CivilisationController::show_front' => ['privates', '.service_locator.pgDvz2b', 'get_ServiceLocator_PgDvz2bService', true],
            'App\\Controller\\HotelController::delete' => ['privates', '.service_locator.z2dqvKD', 'get_ServiceLocator_Z2dqvKDService', true],
            'App\\Controller\\HotelController::edit' => ['privates', '.service_locator.z2dqvKD', 'get_ServiceLocator_Z2dqvKDService', true],
            'App\\Controller\\HotelController::index' => ['privates', '.service_locator.akICzXX', 'get_ServiceLocator_AkICzXXService', true],
            'App\\Controller\\HotelController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HotelController::show' => ['privates', '.service_locator.5XFz.EZ', 'get_ServiceLocator_5XFz_EZService', true],
            'App\\Controller\\ProgrameController::delete' => ['privates', '.service_locator.Dt0iHVJ', 'get_ServiceLocator_Dt0iHVJService', true],
            'App\\Controller\\ProgrameController::edit' => ['privates', '.service_locator.Dt0iHVJ', 'get_ServiceLocator_Dt0iHVJService', true],
            'App\\Controller\\ProgrameController::index' => ['privates', '.service_locator..sNhEph', 'get_ServiceLocator__SNhEphService', true],
            'App\\Controller\\ProgrameController::index_back' => ['privates', '.service_locator..sNhEph', 'get_ServiceLocator__SNhEphService', true],
            'App\\Controller\\ProgrameController::new' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\ProgrameController::show' => ['privates', '.service_locator.wL7r.rR', 'get_ServiceLocator_WL7r_RRService', true],
            'App\\Controller\\ProgrameController::show_front' => ['privates', '.service_locator.wL7r.rR', 'get_ServiceLocator_WL7r_RRService', true],
            'App\\Controller\\ReservationHotelController::delete' => ['privates', '.service_locator.rv0xkic', 'get_ServiceLocator_Rv0xkicService', true],
            'App\\Controller\\ReservationHotelController::edit' => ['privates', '.service_locator.rv0xkic', 'get_ServiceLocator_Rv0xkicService', true],
            'App\\Controller\\ReservationHotelController::index' => ['privates', '.service_locator.c5_s8a7', 'get_ServiceLocator_C5S8a7Service', true],
            'App\\Controller\\ReservationHotelController::listadmin' => ['privates', '.service_locator.c5_s8a7', 'get_ServiceLocator_C5S8a7Service', true],
            'App\\Controller\\ReservationHotelController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ReservationHotelController::show' => ['privates', '.service_locator.TxgI0Ry', 'get_ServiceLocator_TxgI0RyService', true],
            'App\\Controller\\ReservationProgrammeController::delete' => ['privates', '.service_locator.1wfHddh', 'get_ServiceLocator_1wfHddhService', true],
            'App\\Controller\\ReservationProgrammeController::edit' => ['privates', '.service_locator.1wfHddh', 'get_ServiceLocator_1wfHddhService', true],
            'App\\Controller\\ReservationProgrammeController::index' => ['privates', '.service_locator.EAPE5u_', 'get_ServiceLocator_EAPE5uService', true],
            'App\\Controller\\ReservationProgrammeController::listAdmin' => ['privates', '.service_locator.EAPE5u_', 'get_ServiceLocator_EAPE5uService', true],
            'App\\Controller\\ReservationProgrammeController::new' => ['privates', '.service_locator._.Dpbw2', 'get_ServiceLocator__Dpbw2Service', true],
            'App\\Controller\\ReservationProgrammeController::show' => ['privates', '.service_locator..EphVwX', 'get_ServiceLocator__EphVwXService', true],
            'App\\Controller\\ReservationRestaurantController::delete' => ['privates', '.service_locator.MfpZs.F', 'get_ServiceLocator_MfpZs_FService', true],
            'App\\Controller\\ReservationRestaurantController::edit' => ['privates', '.service_locator.MfpZs.F', 'get_ServiceLocator_MfpZs_FService', true],
            'App\\Controller\\ReservationRestaurantController::index' => ['privates', '.service_locator.igSyiNQ', 'get_ServiceLocator_IgSyiNQService', true],
            'App\\Controller\\ReservationRestaurantController::listadmin' => ['privates', '.service_locator.igSyiNQ', 'get_ServiceLocator_IgSyiNQService', true],
            'App\\Controller\\ReservationRestaurantController::new' => ['privates', '.service_locator.j443YhV', 'get_ServiceLocator_J443YhVService', true],
            'App\\Controller\\ReservationRestaurantController::show' => ['privates', '.service_locator.F2x5AtQ', 'get_ServiceLocator_F2x5AtQService', true],
            'App\\Controller\\RestaurantController::index' => ['privates', '.service_locator.XdnbiXt', 'get_ServiceLocator_XdnbiXtService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CivilisationController:delete' => ['privates', '.service_locator.6WpbVPW', 'get_ServiceLocator_6WpbVPWService', true],
            'App\\Controller\\CivilisationController:edit' => ['privates', '.service_locator.6WpbVPW', 'get_ServiceLocator_6WpbVPWService', true],
            'App\\Controller\\CivilisationController:index' => ['privates', '.service_locator.qVDZ2Rp', 'get_ServiceLocator_QVDZ2RpService', true],
            'App\\Controller\\CivilisationController:index_back' => ['privates', '.service_locator.qVDZ2Rp', 'get_ServiceLocator_QVDZ2RpService', true],
            'App\\Controller\\CivilisationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CivilisationController:show' => ['privates', '.service_locator.pgDvz2b', 'get_ServiceLocator_PgDvz2bService', true],
            'App\\Controller\\CivilisationController:show_front' => ['privates', '.service_locator.pgDvz2b', 'get_ServiceLocator_PgDvz2bService', true],
            'App\\Controller\\HotelController:delete' => ['privates', '.service_locator.z2dqvKD', 'get_ServiceLocator_Z2dqvKDService', true],
            'App\\Controller\\HotelController:edit' => ['privates', '.service_locator.z2dqvKD', 'get_ServiceLocator_Z2dqvKDService', true],
            'App\\Controller\\HotelController:index' => ['privates', '.service_locator.akICzXX', 'get_ServiceLocator_AkICzXXService', true],
            'App\\Controller\\HotelController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HotelController:show' => ['privates', '.service_locator.5XFz.EZ', 'get_ServiceLocator_5XFz_EZService', true],
            'App\\Controller\\ProgrameController:delete' => ['privates', '.service_locator.Dt0iHVJ', 'get_ServiceLocator_Dt0iHVJService', true],
            'App\\Controller\\ProgrameController:edit' => ['privates', '.service_locator.Dt0iHVJ', 'get_ServiceLocator_Dt0iHVJService', true],
            'App\\Controller\\ProgrameController:index' => ['privates', '.service_locator..sNhEph', 'get_ServiceLocator__SNhEphService', true],
            'App\\Controller\\ProgrameController:index_back' => ['privates', '.service_locator..sNhEph', 'get_ServiceLocator__SNhEphService', true],
            'App\\Controller\\ProgrameController:new' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\ProgrameController:show' => ['privates', '.service_locator.wL7r.rR', 'get_ServiceLocator_WL7r_RRService', true],
            'App\\Controller\\ProgrameController:show_front' => ['privates', '.service_locator.wL7r.rR', 'get_ServiceLocator_WL7r_RRService', true],
            'App\\Controller\\ReservationHotelController:delete' => ['privates', '.service_locator.rv0xkic', 'get_ServiceLocator_Rv0xkicService', true],
            'App\\Controller\\ReservationHotelController:edit' => ['privates', '.service_locator.rv0xkic', 'get_ServiceLocator_Rv0xkicService', true],
            'App\\Controller\\ReservationHotelController:index' => ['privates', '.service_locator.c5_s8a7', 'get_ServiceLocator_C5S8a7Service', true],
            'App\\Controller\\ReservationHotelController:listadmin' => ['privates', '.service_locator.c5_s8a7', 'get_ServiceLocator_C5S8a7Service', true],
            'App\\Controller\\ReservationHotelController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ReservationHotelController:show' => ['privates', '.service_locator.TxgI0Ry', 'get_ServiceLocator_TxgI0RyService', true],
            'App\\Controller\\ReservationProgrammeController:delete' => ['privates', '.service_locator.1wfHddh', 'get_ServiceLocator_1wfHddhService', true],
            'App\\Controller\\ReservationProgrammeController:edit' => ['privates', '.service_locator.1wfHddh', 'get_ServiceLocator_1wfHddhService', true],
            'App\\Controller\\ReservationProgrammeController:index' => ['privates', '.service_locator.EAPE5u_', 'get_ServiceLocator_EAPE5uService', true],
            'App\\Controller\\ReservationProgrammeController:listAdmin' => ['privates', '.service_locator.EAPE5u_', 'get_ServiceLocator_EAPE5uService', true],
            'App\\Controller\\ReservationProgrammeController:new' => ['privates', '.service_locator._.Dpbw2', 'get_ServiceLocator__Dpbw2Service', true],
            'App\\Controller\\ReservationProgrammeController:show' => ['privates', '.service_locator..EphVwX', 'get_ServiceLocator__EphVwXService', true],
            'App\\Controller\\ReservationRestaurantController:delete' => ['privates', '.service_locator.MfpZs.F', 'get_ServiceLocator_MfpZs_FService', true],
            'App\\Controller\\ReservationRestaurantController:edit' => ['privates', '.service_locator.MfpZs.F', 'get_ServiceLocator_MfpZs_FService', true],
            'App\\Controller\\ReservationRestaurantController:index' => ['privates', '.service_locator.igSyiNQ', 'get_ServiceLocator_IgSyiNQService', true],
            'App\\Controller\\ReservationRestaurantController:listadmin' => ['privates', '.service_locator.igSyiNQ', 'get_ServiceLocator_IgSyiNQService', true],
            'App\\Controller\\ReservationRestaurantController:new' => ['privates', '.service_locator.j443YhV', 'get_ServiceLocator_J443YhVService', true],
            'App\\Controller\\ReservationRestaurantController:show' => ['privates', '.service_locator.F2x5AtQ', 'get_ServiceLocator_F2x5AtQService', true],
            'App\\Controller\\RestaurantController:index' => ['privates', '.service_locator.XdnbiXt', 'get_ServiceLocator_XdnbiXtService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CivilisationController::delete' => '?',
            'App\\Controller\\CivilisationController::edit' => '?',
            'App\\Controller\\CivilisationController::index' => '?',
            'App\\Controller\\CivilisationController::index_back' => '?',
            'App\\Controller\\CivilisationController::new' => '?',
            'App\\Controller\\CivilisationController::show' => '?',
            'App\\Controller\\CivilisationController::show_front' => '?',
            'App\\Controller\\HotelController::delete' => '?',
            'App\\Controller\\HotelController::edit' => '?',
            'App\\Controller\\HotelController::index' => '?',
            'App\\Controller\\HotelController::new' => '?',
            'App\\Controller\\HotelController::show' => '?',
            'App\\Controller\\ProgrameController::delete' => '?',
            'App\\Controller\\ProgrameController::edit' => '?',
            'App\\Controller\\ProgrameController::index' => '?',
            'App\\Controller\\ProgrameController::index_back' => '?',
            'App\\Controller\\ProgrameController::new' => '?',
            'App\\Controller\\ProgrameController::show' => '?',
            'App\\Controller\\ProgrameController::show_front' => '?',
            'App\\Controller\\ReservationHotelController::delete' => '?',
            'App\\Controller\\ReservationHotelController::edit' => '?',
            'App\\Controller\\ReservationHotelController::index' => '?',
            'App\\Controller\\ReservationHotelController::listadmin' => '?',
            'App\\Controller\\ReservationHotelController::new' => '?',
            'App\\Controller\\ReservationHotelController::show' => '?',
            'App\\Controller\\ReservationProgrammeController::delete' => '?',
            'App\\Controller\\ReservationProgrammeController::edit' => '?',
            'App\\Controller\\ReservationProgrammeController::index' => '?',
            'App\\Controller\\ReservationProgrammeController::listAdmin' => '?',
            'App\\Controller\\ReservationProgrammeController::new' => '?',
            'App\\Controller\\ReservationProgrammeController::show' => '?',
            'App\\Controller\\ReservationRestaurantController::delete' => '?',
            'App\\Controller\\ReservationRestaurantController::edit' => '?',
            'App\\Controller\\ReservationRestaurantController::index' => '?',
            'App\\Controller\\ReservationRestaurantController::listadmin' => '?',
            'App\\Controller\\ReservationRestaurantController::new' => '?',
            'App\\Controller\\ReservationRestaurantController::show' => '?',
            'App\\Controller\\RestaurantController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CivilisationController:delete' => '?',
            'App\\Controller\\CivilisationController:edit' => '?',
            'App\\Controller\\CivilisationController:index' => '?',
            'App\\Controller\\CivilisationController:index_back' => '?',
            'App\\Controller\\CivilisationController:new' => '?',
            'App\\Controller\\CivilisationController:show' => '?',
            'App\\Controller\\CivilisationController:show_front' => '?',
            'App\\Controller\\HotelController:delete' => '?',
            'App\\Controller\\HotelController:edit' => '?',
            'App\\Controller\\HotelController:index' => '?',
            'App\\Controller\\HotelController:new' => '?',
            'App\\Controller\\HotelController:show' => '?',
            'App\\Controller\\ProgrameController:delete' => '?',
            'App\\Controller\\ProgrameController:edit' => '?',
            'App\\Controller\\ProgrameController:index' => '?',
            'App\\Controller\\ProgrameController:index_back' => '?',
            'App\\Controller\\ProgrameController:new' => '?',
            'App\\Controller\\ProgrameController:show' => '?',
            'App\\Controller\\ProgrameController:show_front' => '?',
            'App\\Controller\\ReservationHotelController:delete' => '?',
            'App\\Controller\\ReservationHotelController:edit' => '?',
            'App\\Controller\\ReservationHotelController:index' => '?',
            'App\\Controller\\ReservationHotelController:listadmin' => '?',
            'App\\Controller\\ReservationHotelController:new' => '?',
            'App\\Controller\\ReservationHotelController:show' => '?',
            'App\\Controller\\ReservationProgrammeController:delete' => '?',
            'App\\Controller\\ReservationProgrammeController:edit' => '?',
            'App\\Controller\\ReservationProgrammeController:index' => '?',
            'App\\Controller\\ReservationProgrammeController:listAdmin' => '?',
            'App\\Controller\\ReservationProgrammeController:new' => '?',
            'App\\Controller\\ReservationProgrammeController:show' => '?',
            'App\\Controller\\ReservationRestaurantController:delete' => '?',
            'App\\Controller\\ReservationRestaurantController:edit' => '?',
            'App\\Controller\\ReservationRestaurantController:index' => '?',
            'App\\Controller\\ReservationRestaurantController:listadmin' => '?',
            'App\\Controller\\ReservationRestaurantController:new' => '?',
            'App\\Controller\\ReservationRestaurantController:show' => '?',
            'App\\Controller\\RestaurantController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
