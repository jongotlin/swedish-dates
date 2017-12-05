<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Pentecost;

class PentecostTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new Pentecost();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
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
    public function incorrectDaysProvider()
    {
        return [
            ['2016-05-14'],
            ['2016-05-16'],
        ];
    }
}
