<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerEve;

class MidsummerEveTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MidsummerEve();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-23'],
            ['2015-06-19'],
            ['2016-06-24'],
            ['2017-06-23'],
            ['2018-06-22'],
            ['2019-06-21'],
            ['2020-06-19'],
            ['2021-06-25'],
            ['2022-06-24'],
            ['2023-06-23'],
            ['2024-06-21'],
            ['2025-06-20'],
            ['2026-06-19'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2000-06-22'],
            ['2000-06-24'],
            ['2016-06-23'],
        ];
    }
}
