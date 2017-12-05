<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NewYearsDay;

class NewYearsDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new NewYearsDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-01-01'],
            ['2014-01-01'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['1999-12-31'],
            ['2000-01-02'],
            ['2014-02-01'],
        ];
    }
}
