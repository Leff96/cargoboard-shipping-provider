<?php
namespace CargoboardShipping\Providers;

use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use Plenty\Plugin\ServiceProvider;

/**
 * Class CargoboardShippingServiceProvider
 * @package CargoboardShipping\Providers
 */
class CargoboardShippingServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
	    // add REST routes by registering a RouteServiceProvider if necessary
//	     $this->getApplication()->register(CargoboardShippingRouteServiceProvider::class);
    }

    public function boot(ShippingServiceProviderService $shippingServiceProviderService)
    {

        $shippingServiceProviderService->registerShippingProvider(
            'CargoboardShipping',
            ['de' => '*** Plenty shipping tutorial ***', 'en' => '*** Plenty shipping tutorial ***'],
            [
                'CargoboardShipping\\Controllers\\ShippingController@registerShipments',
                'CargoboardShipping\\Controllers\\ShippingController@deleteShipments',
            ]);
    }
}
