<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\EpiphanyRule;

class EpiphanyRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function epiphanyIsRed()
    {
        $sundayRule = new EpiphanyRule();

        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2000-01-06')));
        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2014-01-06')));
    }

    /**
     * @test
     */
    public function nonEphiphanyDaysAreNotRed()
    {
        $sundayRule = new EpiphanyRule();

        $this->assertFalse($sundayRule->isRedDay(new \DateTime('1014-01-05')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('1014-01-07')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-06-01')));
    }
}
