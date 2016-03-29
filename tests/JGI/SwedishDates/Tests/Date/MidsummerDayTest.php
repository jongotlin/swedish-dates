<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerDay;

class MidsummerDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function midsummerDayIsMatched()
    {
        $midsummerDay = new MidsummerDay();

        $this->assertTrue($midsummerDay->match(new \DateTime('2000-06-24')));
        $this->assertTrue($midsummerDay->match(new \DateTime('2015-06-20')));
        $this->assertTrue($midsummerDay->match(new \DateTime('2016-06-25')));
    }

    /**
     * @test
     */
    public function nonMidsummerDayIsNotMatched()
    {
        $midsummerDay = new MidsummerDay();

        $this->assertFalse($midsummerDay->match(new \DateTime('2000-06-23')));
        $this->assertFalse($midsummerDay->match(new \DateTime('2000-06-25')));
        $this->assertFalse($midsummerDay->match(new \DateTime('2016-06-24')));
    }
}
