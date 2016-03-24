<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\ChristmasEve;

class ChristmasEveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function christmasEveIsRed()
    {
        $christmasEve = new ChristmasEve();

        $this->assertTrue($christmasEve->match(new \DateTime('2014-12-24')));
        $this->assertTrue($christmasEve->match(new \DateTime('1999-12-24')));
    }

    /**
     * @test
     */
    public function nonChristmasDaysAreNotRed()
    {
        $christmasEve = new ChristmasEve();

        $this->assertFalse($christmasEve->match(new \DateTime('2014-11-23')));
        $this->assertFalse($christmasEve->match(new \DateTime('2014-12-25')));
        $this->assertFalse($christmasEve->match(new \DateTime('2014-12-26')));
        $this->assertFalse($christmasEve->match(new \DateTime('2014-12-31')));
    }

}
