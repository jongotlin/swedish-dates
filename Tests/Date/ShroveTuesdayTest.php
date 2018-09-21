<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ShroveTuesday;

class ShroveTuesdayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new ShroveTuesday();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2010-02-16'],
            ['2011-03-08'],
            ['2012-02-21'],
            ['2013-02-12'],
            ['2014-03-04'],
            ['2015-02-17'],
            ['2016-02-09'],
            ['2017-02-28'],
            ['2018-02-13'],
            ['2019-03-05'],
            ['2020-02-25'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2011-02-16'],
            ['2010-03-08'],
        ];
    }
}
