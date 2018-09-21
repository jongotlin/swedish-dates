<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\DaylightSavingTimeStop;

class DaylightSavingTimeStopTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new DaylightSavingTimeStop();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-10-29'],
            ['2018-10-28'],
            ['2019-10-27'],
            ['2020-10-25'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-10-28'],
            ['2017-10-30'],
            ['2020-10-27'],
        ];
    }
}
