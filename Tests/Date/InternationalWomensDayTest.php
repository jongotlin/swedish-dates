<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\InternationalWomensDay;

class InternationalWomensDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new InternationalWomensDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-03-08'],
            ['2014-03-08'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-02-08'],
            ['2014-03-07'],
            ['2014-03-09'],
        ];
    }
}
