<?php
namespace CargoboardShipping\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CargoboardShippingRouteServiceProvider
 * @package CargoboardShipping\Providers
 */
class CargoboardShippingRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->post('shipment/plenty_tutorial/register_shipments', [
            'middleware' => 'oauth',
            'uses'       => 'CargoboardShipping\Controllers\ShipmentController@registerShipments'
        ]);
  	}

}
