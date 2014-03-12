<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\NewYearsDayRule;

class NewYearsDayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function newYearsDayIsRed()
    {
        $sundayRule = new NewYearsDayRule();

        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2000-01-01')));
        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2014-01-01')));
    }

    /**
     * @test
     */
    public function nonNewYearsDaysAreNotRed()
    {
        $sundayRule = new NewYearsDayRule();

        $this->assertFalse($sundayRule->isRedDay(new \DateTime('1999-12-31')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2000-01-02')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-02-01')));
    }
}
