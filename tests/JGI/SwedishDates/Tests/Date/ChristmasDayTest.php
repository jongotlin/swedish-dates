<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ChristmasDay;

class ChristmasDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function christmasDayIsRed()
    {
        $christmasDay = new ChristmasDay();

        $this->assertTrue($christmasDay->match(new \DateTime('2014-12-25')));
        $this->assertTrue($christmasDay->match(new \DateTime('1999-12-25')));
    }

    /**
     * @test
     */
    public function nonChristmasDaysAreNotRed()
    {
        $christmasDay = new ChristmasDay();

        $this->assertFalse($christmasDay->match(new \DateTime('2014-11-24')));
        $this->assertFalse($christmasDay->match(new \DateTime('2014-12-26')));
        $this->assertFalse($christmasDay->match(new \DateTime('2014-12-27')));
        $this->assertFalse($christmasDay->match(new \DateTime('2014-12-31')));
    }

}
