<?php

namespace ZFTest\EventsChart;

use ZF\EventsChart\EventsChartListener;

class EventsChartListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var HttpCacheListener
     */
    protected $instance;

    /**
     * @return array
     */
    public function configDataProvider()
    {
        return array(
            array(
                array('enable' => false),
            ),

            array(
                array('enable' => true),
            ),
        );
    }

    /**
     * @see testMethodsReturnSelf
     *
     * @return array
     */
    public function methodsReturnSelfDataProvider()
    {
        return array(
            array('setConfig', array(array())),
        );
    }

    public function setUp()
    {
        $this->instance = new EventsChartListener();
    }

    /**
     * @coversNothing
     * @dataProvider methodsReturnSelfDataProvider
     *
     * @param string $method
     * @param array  $args
     */
    public function testMethodsReturnsSelf($method, $args)
    {
        $ret = call_user_func_array(array($this->instance, $method), $args);

        $this->assertInstanceOf('\ZF\EventsChart\EventsChartListener', $ret);
    }
}
