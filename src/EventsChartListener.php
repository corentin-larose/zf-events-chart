<?php

namespace ZF\EventsChart;

use Zend\EventManager\AbstractListenerAggregate;

class EventsChartListener extends AbstractListenerAggregate
{
    /**
     * @param EventManagerInterface $events
     * @param int                   $priority
     */
    public function attach(\Zend\EventManager\EventManagerInterface $events, $priority = 1)
    {
        $sem = $events->getSharedManager();
        
        // Register at very high priority so that stopped 
        // propagation don't hide events from us.
        $this->listeners[] = $sem->attach('*', '*', array($this, 'onEvent'), 10000);
    }
    
    public function onEvent(\Zend\EventManager\Event $event)
    {
        $event  = $event->getName();
        $params = $event->getParams();
        $target = get_class($event->getTarget());
        
        error_log(sprintf(
            '%s %s %s',
            $event,
            $target,
            print_r($params, true)
        ));
    }
}
