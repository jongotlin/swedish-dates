<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\WalpurgisNight;

class WalpurgisNightTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new WalpurgisNight();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-04-30'],
            ['2014-04-30'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-03-30'],
            ['2014-04-29'],
        ];
    }
}
