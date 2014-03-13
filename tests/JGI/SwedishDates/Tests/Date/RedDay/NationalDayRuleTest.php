<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\NationalDayRule;

class NationalDayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function nationalDayIsRed()
    {
        $rule = new NationalDayRule();

        $this->assertTrue($rule->isRedDay(new \DateTime('2005-06-06')));
        $this->assertTrue($rule->isRedDay(new \DateTime('2010-06-06')));
        $this->assertTrue($rule->isRedDay(new \DateTime('2014-06-06')));
    }

    /**
     * @test
     */
    public function nonNationalDaysAreNotRed()
    {
        $rule = new NationalDayRule();

        $this->assertFalse($rule->isRedDay(new \DateTime('2004-06-06')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-01-06')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-06-07')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-06-18')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-12-24')));
    }
}
