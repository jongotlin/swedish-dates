<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\WaffleDay;

class WaffleDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new WaffleDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-03-25'],
            ['2014-03-25'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-02-25'],
            ['2014-03-24'],
            ['2014-03-16'],
        ];
    }
}
