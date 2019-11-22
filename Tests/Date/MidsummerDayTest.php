<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerDay;

class MidsummerDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new MidsummerDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-06-24'],
            ['2015-06-20'],
            ['2016-06-25'],
            ['2017-06-24'],
            ['2018-06-23'],
            ['2019-06-22'],
            ['2020-06-20'],
            ['2021-06-26'],
            ['2022-06-25'],
            ['2023-06-24'],
            ['2024-06-22'],
            ['2025-06-21'],
            ['2026-06-20'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2000-06-23'],
            ['2000-06-25'],
            ['2016-06-24'],
        ];
    }
}
