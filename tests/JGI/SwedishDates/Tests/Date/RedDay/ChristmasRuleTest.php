<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\ChristmasRule;

class ChristmasRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function christmasDaysAreRed()
    {
        $christmasRule = new ChristmasRule();

        $this->assertTrue($christmasRule->isRedDay(new \DateTime('2014-12-25')));
        $this->assertTrue($christmasRule->isRedDay(new \DateTime('2014-12-26')));
    }

    /**
     * @test
     */
    public function nonChristmasDaysAreNotRed()
    {
        $christmasRule = new ChristmasRule();

        $this->assertFalse($christmasRule->isRedDay(new \DateTime('2014-11-24')));
        $this->assertFalse($christmasRule->isRedDay(new \DateTime('2014-12-24')));
        $this->assertFalse($christmasRule->isRedDay(new \DateTime('2014-12-27')));
        $this->assertFalse($christmasRule->isRedDay(new \DateTime('2014-12-31')));
    }

}
