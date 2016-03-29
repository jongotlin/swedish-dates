<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\MidsummerEve;

class MidsummerEveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function midsummerEveIsMatched()
    {
        $midsummerEve = new MidsummerEve();

        $this->assertTrue($midsummerEve->match(new \DateTime('2000-06-23')));
        $this->assertTrue($midsummerEve->match(new \DateTime('2015-06-19')));
        $this->assertTrue($midsummerEve->match(new \DateTime('2016-06-24')));
    }

    /**
     * @test
     */
    public function nonMidsummerEveIsNotMatched()
    {
        $midsummerEve = new MidsummerEve();

        $this->assertFalse($midsummerEve->match(new \DateTime('2000-06-22')));
        $this->assertFalse($midsummerEve->match(new \DateTime('2000-06-24')));
        $this->assertFalse($midsummerEve->match(new \DateTime('2016-06-23')));
    }
}
