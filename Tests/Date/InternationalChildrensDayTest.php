<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\InternationalChildrensDay;

class InternationalChildrensDayTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new InternationalChildrensDay();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2000-10-02'],
            ['2014-10-06'],
            ['2019-10-07'],
            ['2020-10-05'],
            ['2021-10-04'],
            ['2022-10-03'],
            ['2023-10-02'],
            ['2024-10-07'],
            ['2025-10-06'],
            ['2026-10-05'],
            ['2027-10-04'],
            ['2028-10-02'],
            ['2029-10-01'],
            ['2030-10-07'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2014-01-10'],
            ['2014-10-10'],
        ];
    }
}
