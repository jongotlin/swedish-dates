<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NewYearsDay;

class NewYearsDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function newYearsDayIsRed()
    {
        $newYearsDay = new NewYearsDay();

        $this->assertTrue($newYearsDay->match(new \DateTime('2000-01-01')));
        $this->assertTrue($newYearsDay->match(new \DateTime('2014-01-01')));
    }

    /**
     * @test
     */
    public function nonNewYearsDayIsNotRed()
    {
        $newYearsDay = new NewYearsDay();

        $this->assertFalse($newYearsDay->match(new \DateTime('1999-12-31')));
        $this->assertFalse($newYearsDay->match(new \DateTime('2000-01-02')));
        $this->assertFalse($newYearsDay->match(new \DateTime('2014-02-01')));
    }
}
