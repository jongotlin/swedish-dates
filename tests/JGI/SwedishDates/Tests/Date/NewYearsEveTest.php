<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NewYearsEve;

class NewYearsEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new NewYearsEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-12-31'],
            ['2014-12-31'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['1999-01-31'],
            ['2000-01-01'],
            ['2014-12-30'],
        ];
    }
}
