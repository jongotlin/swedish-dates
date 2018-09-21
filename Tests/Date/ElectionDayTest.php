<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ElectionDay;

class ElectionDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ElectionDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-09-14'],
            ['2018-09-09'],
            ['2022-09-11'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-09-09'],
            ['2018-09-08'],
            ['2019-09-08'],
            ['2020-09-08'],
        ];
    }
}
