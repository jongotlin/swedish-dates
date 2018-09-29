<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MaundyThursday;

class MaundyThursdayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MaundyThursday();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2018-03-29'],
            ['2019-04-18'],
            ['2020-04-09'],
            ['2021-04-01'],
            ['2022-04-14'],
            ['2023-04-06'],
            ['2024-03-28'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2018-03-28'],
            ['2019-04-19'],
            ['2020-04-08'],
            ['2021-04-10'],
        ];
    }
}
