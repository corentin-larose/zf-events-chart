<?php

return array(
    'log' => array(
        'ZF\Events\Chart\Logger' => array(
            'writers' => array(
                array(
                    'name' => 'stream',
                    'options' => array(
                        'stream' => 'data/zf-events-chart.log',
                    ),
                ),
            ),
        ),
    ),

    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Log\LoggerAbstractServiceFactory',
        ),

        'factories' => array(
            'ZF\EventsChart\EventsChartListener' => 'ZF\EventsChart\EventsChartListenerFactory',
        ),
    ),

    'zf-events-chart' => array(
        /*
         * Whether to enable module.
         */
        'enable'             => true,

        /*
         * Config key for the logger
         */
        'logger_service_key' => 'log',
    ),
);
