<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ValentinesDay;

class ValentinesDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ValentinesDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-02-14'],
            ['2014-02-14'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-02-13'],
            ['2014-01-14'],
            ['2014-01-01'],
        ];
    }
}
