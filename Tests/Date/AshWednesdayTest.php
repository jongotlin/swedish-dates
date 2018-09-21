<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\AshWednesday;

class AshWednesdayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new AshWednesday();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2015-02-18'],
            ['2018-02-14'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2015-02-17'],
            ['2015-02-19'],
            ['2018-02-13'],
            ['2018-02-15'],
            ['2018-02-18'],
            ['2015-02-14'],
        ];
    }
}
