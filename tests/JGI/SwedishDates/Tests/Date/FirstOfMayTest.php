<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\FirstOfMay;

class FirstOfMayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new FirstOfMay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-05-01'],
            ['2014-05-01'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-05-05'],
            ['2014-01-05'],
            ['2014-06-01'],
        ];
    }
}
