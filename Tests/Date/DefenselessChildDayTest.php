<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\DefenselessChildDay;

class DefenselessChildDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new DefenselessChildDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-12-28'],
            ['2014-12-28'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-12-27'],
            ['2014-12-19'],
        ];
    }
}
