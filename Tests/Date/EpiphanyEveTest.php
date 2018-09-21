<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\EpiphanyEve;

class EpiphanyEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new EpiphanyEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-01-05'],
            ['2014-01-05'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-04'],
            ['2014-01-06'],
            ['2014-06-01'],
        ];
    }
}
