<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\FourthOfAdvent;

class FourthOfAdventTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new FourthOfAdvent();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2016-12-18'],
            ['2017-12-24'],
            ['2018-12-23'],
            ['2019-12-22'],
            ['2020-12-20'],
            ['2021-12-19'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2016-12-19'],
            ['2017-12-23'],
            ['2018-12-22'],
            ['2019-12-23'],
            ['2020-12-19'],
            ['2021-12-20'],
        ];
    }
}
