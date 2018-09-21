<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NationalDayOfTheRomans;

class NationalDayOfTheRomansTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new NationalDayOfTheRomans();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-04-08'],
            ['2014-04-08'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-03-08'],
            ['2014-04-07'],
            ['2014-04-09'],
        ];
    }
}
