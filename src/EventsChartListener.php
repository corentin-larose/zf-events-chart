<?php

namespace ZF\EventsChart;

use Zend\EventManager\AbstractListenerAggregate;

class EventsChartListener
    extends AbstractListenerAggregate
    implements \Zend\Log\LoggerAwareInterface
{
    use \Zend\Log\LoggerAwareTrait;

    protected $config = [];

    /**
     * @param EventManagerInterface $events
     * @param int                   $priority
     */
    public function attach(\Zend\EventManager\EventManagerInterface $events, $priority = 1)
    {
        if (!empty($config['enable'])) {
            return;
        }

        $sem = $events->getSharedManager();

        // Register at very high priority so that stopped
        // propagation don't hide events from us.
        $this->listeners[] = $sem->attach('*', '*', array($this, 'onEvent'), 10000);
    }

    public function onEvent(\Zend\EventManager\Event $event)
    {
        $name   = $event->getName();
        $target = get_class($event->getTarget());

        $event = sprintf(
            'Event %s called on %s',
            $name,
            $target
        );

        $this->logger->log($this->config['log_level'], $event);
    }

    public function setConfig(array $config)
    {
        $this->config = $config;
    }
}
