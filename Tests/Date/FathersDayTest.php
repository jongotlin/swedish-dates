<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\FathersDay;

class FathersDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new FathersDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2017-11-12'],
            ['2018-11-11'],
            ['2019-11-10'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2017-11-10'],
            ['2018-11-12'],
            ['2019-11-11'],
        ];
    }
}
