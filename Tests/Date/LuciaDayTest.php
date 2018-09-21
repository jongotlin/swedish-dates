<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\LuciaDay;

class LuciaDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new LuciaDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-12-13'],
            ['2014-12-13'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-12-12'],
            ['2014-12-14'],
        ];
    }
}
