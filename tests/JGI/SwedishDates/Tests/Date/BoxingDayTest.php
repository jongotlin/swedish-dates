<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\BoxingDay;

class BoxingDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new BoxingDay();;
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-12-26'],
            ['1999-12-26'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-11-24'],
            ['2014-12-25'],
            ['2014-12-27'],
            ['2014-12-31'],
        ];
    }
}
