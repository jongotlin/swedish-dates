<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\SecondOfAdvent;

class SecondOfAdventTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new SecondOfAdvent();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2016-12-04'],
            ['2017-12-10'],
            ['2018-12-09'],
            ['2019-12-08'],
            ['2020-12-06'],
            ['2021-12-05'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2016-12-03'],
            ['2017-12-11'],
            ['2018-12-10'],
            ['2019-12-09'],
            ['2020-12-05'],
            ['2021-12-06'],
        ];
    }
}
