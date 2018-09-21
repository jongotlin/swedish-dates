<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\DaylightSavingTimeStart;

class DaylightSavingTimeStartTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new DaylightSavingTimeStart();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-03-26'],
            ['2018-03-25'],
            ['2019-03-31'],
            ['2020-03-29'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2018-03-26'],
            ['2019-03-26'],
        ];
    }
}
