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
        $sundayRule = new NationalDayRule();

        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2010-06-06')));
        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2014-06-06')));
    }

    /**
     * @test
     */
    public function nonNationalDaysAreNotRed()
    {
        $sundayRule = new NationalDayRule();

        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-01-06')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-06-07')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-06-18')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-12-24')));
    }
}
