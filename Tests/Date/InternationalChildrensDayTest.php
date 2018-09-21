<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\InternationalChildrensDay;

class InternationalChildrensDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new InternationalChildrensDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-10-01'],
            ['2014-10-01'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-10'],
            ['2014-10-10'],
        ];
    }
}
