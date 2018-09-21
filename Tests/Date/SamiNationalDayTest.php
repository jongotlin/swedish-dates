<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\SamiNationalDay;

class SamiNationalDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new SamiNationalDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-02-06'],
            ['2014-02-06'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-02-05'],
            ['2014-01-16'],
            ['2014-01-01'],
        ];
    }
}
