<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\PentecostEve;

class PentecostEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new PentecostEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-06-07'],
            ['2015-05-23'],
            ['2016-05-14'],
            ['2017-06-03'],
            ['2018-05-19'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2016-05-13'],
            ['2016-05-15'],
        ];
    }
}
