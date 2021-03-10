<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Halloween;

class HalloweenTest extends AbstractDayTest
{
    public function setUp()
    {
        $this->day = new Halloween();
    }

    /**
     * @return array
     */
    public function correctDaysProvider()
    {
        return [
            ['2021-11-01'],
            ['2022-11-01'],
            ['2030-11-01'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectDaysProvider()
    {
        return [
            ['2021-10-31'],
            ['2021-11-02'],
        ];
    }
}
