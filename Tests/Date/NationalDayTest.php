<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NationalDay;

class NationalDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new NationalDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2005-06-06'],
            ['2010-06-06'],
            ['2014-06-06'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2004-06-06'],
            ['2014-01-06'],
            ['2014-06-07'],
            ['2014-06-18'],
            ['2014-12-24'],
        ];
    }
}
