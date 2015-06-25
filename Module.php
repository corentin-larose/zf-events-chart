<?php

namespace ZF\EventsChart;

class Module
{
    public function getAutoloaderConfig()
    {
        return array('Zend\Loader\StandardAutoloader' => array('namespaces' => array(
            __NAMESPACE__ => __DIR__.'/src/',
        )));
    }

    public function getConfig()
    {
        return include __DIR__.'/config/module.config.php';
    }

    public function onBootstrap(\Zend\Mvc\MvcEvent $e)
    {
        $app = $e->getApplication();
        $sm = $app->getServiceManager();

        $config = $sm->get('config');

        if (!empty($config['zf-events-chart']['enable'])) {
            $em = $app->getEventManager();
            $em->attachAggregate($sm->get('ZF\EventsChart\EventsChartListener'));
        }
    }
}
