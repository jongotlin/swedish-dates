<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerDay;

class MidsummerDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MidsummerDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-24'],
            ['2015-06-20'],
            ['2016-06-25'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2000-06-23'],
            ['2000-06-25'],
            ['2016-06-24'],
        ];
    }
}
