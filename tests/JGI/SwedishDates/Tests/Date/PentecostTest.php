<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Pentecost;

class PentecostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider pentecostProvider
     */
    public function isPentecost($date)
    {
        $pentecost = new Pentecost();

        $this->assertTrue($pentecost->match(new \DateTime($date)));
    }

    /**
     * @test
     * @dataProvider notPentecostProvider
     */
    public function isNotEasterEve($date)
    {
        $pentecost = new Pentecost();

        $this->assertFalse($pentecost->match(new \DateTime($date)));
    }

    /**
     * @return array
     */
    public function pentecostProvider()
    {
        return [
            ['2014-06-08'],
            ['2015-05-24'],
            ['2016-05-15'],
            ['2017-06-04'],
            ['2018-05-20'],
        ];
    }

    /**
     * @return array
     */
    public function notPentecostProvider()
    {
        return [
            ['2016-05-14'],
            ['2016-05-16'],
        ];
    }
}
