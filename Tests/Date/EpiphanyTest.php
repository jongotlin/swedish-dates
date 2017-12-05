<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Epiphany;

class EpiphanyTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new Epiphany();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-01-06'],
            ['2014-01-06'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-05'],
            ['2014-01-07'],
            ['2014-06-01'],
        ];
    }
}
