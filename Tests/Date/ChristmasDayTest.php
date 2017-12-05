<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ChristmasDay;

class ChristmasDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ChristmasDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-12-25'],
            ['1999-12-25'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-11-24'],
            ['2014-12-26'],
            ['2014-12-27'],
            ['2014-12-31'],
        ];
    }
}
