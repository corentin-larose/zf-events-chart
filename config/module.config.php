<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'ZF\Statsd\EventsChart' => 'ZF\Statsd\EventsChartFactory',
        ),
    ),

    'zf-events-chart' => array(
        /*
         * Whether to enable module.
         */
        'enable' => true,
    ),
);
