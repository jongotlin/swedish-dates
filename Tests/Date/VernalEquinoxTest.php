<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\VernalEquinox;

class VernalEquinoxTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new VernalEquinox();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-03-20'],
            ['2014-03-20'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-02-20'],
            ['2014-03-21'],
            ['2014-03-19'],
        ];
    }
}
