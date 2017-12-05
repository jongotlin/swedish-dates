<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\EasterEve;

class EasterEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new EasterEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2014-04-19'],
            ['2015-04-04'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-04-18'],
            ['2015-04-20'],
        ];
    }
}
