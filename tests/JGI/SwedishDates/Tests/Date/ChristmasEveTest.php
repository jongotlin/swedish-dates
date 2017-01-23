<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ChristmasEve;

class ChristmasEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ChristmasEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-12-24'],
            ['1999-12-24'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-11-23'],
            ['2014-12-25'],
            ['2014-12-26'],
            ['2014-12-31'],
        ];
    }
}
