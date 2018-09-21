<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\UNDay;

class UNDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new UNDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-10-24'],
            ['2014-10-24'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-24'],
            ['2014-10-25'],
        ];
    }
}
