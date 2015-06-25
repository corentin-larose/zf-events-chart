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
                array(
                    'name' => '\Zend\Log\Writer\FirePHP',
                ),
            ),
        ),
    ),

    'service_manager' => array(
        'factories' => array(
            '\ZF\EventsChart\EventsChartListener' => '\ZF\EventsChart\EventsChartListenerFactory',
        ),
    ),

    'zf-events-chart' => array(
        /*
         * Whether to enable module.
         */
        'enable' => true,

        'log_level' => \Zend\Log\Logger::INFO,

        /*
         * Config key for the logger
         */
        'logger_service_key' => 'ZF\Events\Chart\Logger',
    ),
);
