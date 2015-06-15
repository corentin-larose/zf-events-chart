<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'ZF\EventsChart\EventsChartListener' => 'ZF\EventsChart\EventsChartListenerFactory',
        ),
    ),

    'zf-events-chart' => array(
        /*
         * Whether to enable module.
         */
        'enable' => true,
    ),
);
