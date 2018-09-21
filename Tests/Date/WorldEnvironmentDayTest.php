<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\WorldEnvironmentDay;

class WorldEnvironmentDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new WorldEnvironmentDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-05'],
            ['2014-06-05'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-06-06'],
            ['2014-05-06'],
        ];
    }
}
