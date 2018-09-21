<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ThirdOfAdvent;

class ThirdOfAdventTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ThirdOfAdvent();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2016-12-11'],
            ['2017-12-17'],
            ['2018-12-16'],
            ['2019-12-15'],
            ['2020-12-13'],
            ['2021-12-12'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2016-12-10'],
            ['2017-12-18'],
            ['2018-12-15'],
            ['2019-12-16'],
            ['2020-12-12'],
            ['2021-12-13'],
        ];
    }
}
