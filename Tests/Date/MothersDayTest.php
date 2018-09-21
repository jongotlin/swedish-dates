<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MothersDay;

class MothersDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MothersDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2018-05-27'],
            ['2019-05-26'],
            ['2020-05-31'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2018-05-26'],
            ['2019-05-27'],
            ['2020-05-30'],
        ];
    }
}
