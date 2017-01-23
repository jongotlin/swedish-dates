<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerEve;

class MidsummerEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MidsummerEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-23'],
            ['2015-06-19'],
            ['2016-06-24'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2000-06-22'],
            ['2000-06-24'],
            ['2016-06-23'],
        ];
    }
}
