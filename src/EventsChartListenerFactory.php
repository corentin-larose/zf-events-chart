<?php

namespace ZF\EventsChart;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class EventsChartListenerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $services
     *
     * @return EventsChartListener
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = array();
        if ($serviceLocator->has('Config')) {
            $config = $serviceLocator->get('Config');
            if (isset($config['zf-events-chart'])) {
                $config = $config['zf-events-chart'];
            }
        }

        $eventsChartListener = new EventsChartListener();
        $eventsChartListener->setConfig($config);

        return $eventsChartListener;
    }
}
