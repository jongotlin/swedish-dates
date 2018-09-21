<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NobelDay;

class NobelDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new NobelDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-12-10'],
            ['2014-12-10'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-10-12'],
            ['2014-12-12'],
        ];
    }
}
