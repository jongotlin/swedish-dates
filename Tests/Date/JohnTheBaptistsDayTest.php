<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\JohnTheBaptistsDay;

class JohnTheBaptistsDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new JohnTheBaptistsDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-24'],
            ['2021-06-24'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2000-06-25'],
            ['2021-06-23'],
        ];
    }
}
