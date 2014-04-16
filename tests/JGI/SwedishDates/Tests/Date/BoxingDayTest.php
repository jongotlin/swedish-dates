<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\BoxingDay;

class BoxingDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function boxingDayIsRed()
    {
        $boxingDay = new BoxingDay();

        $this->assertTrue($boxingDay->match(new \DateTime('2014-12-26')));
        $this->assertTrue($boxingDay->match(new \DateTime('1999-12-26')));
    }

    /**
     * @test
     */
    public function nonBoxingDaysAreNotRed()
    {
        $boxingDay = new BoxingDay();

        $this->assertFalse($boxingDay->match(new \DateTime('2014-11-24')));
        $this->assertFalse($boxingDay->match(new \DateTime('2014-12-25')));
        $this->assertFalse($boxingDay->match(new \DateTime('2014-12-27')));
        $this->assertFalse($boxingDay->match(new \DateTime('2014-12-31')));
    }

}
