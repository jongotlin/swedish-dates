<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\FirstOfAdvent;

class FirstOfAdventTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new FirstOfAdvent();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2016-11-27'],
            ['2017-12-03'],
            ['2018-12-02'],
            ['2019-12-01'],
            ['2020-11-29'],
            ['2021-11-28'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2016-12-03'],
            ['2017-12-02'],
            ['2018-12-01'],
            ['2019-12-02'],
        ];
    }
}
