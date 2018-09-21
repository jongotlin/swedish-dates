<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\TwentiethDayYule;

class TwentiethDayYuleTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new TwentiethDayYule();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-01-13'],
            ['2014-01-13'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-12'],
            ['2014-01-14'],
            ['2014-01-01'],
        ];
    }
}
