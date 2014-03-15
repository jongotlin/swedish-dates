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
        $rule = new EpiphanyRule();

        $this->assertTrue($rule->isRedDay(new \DateTime('2000-01-06')));
        $this->assertTrue($rule->isRedDay(new \DateTime('2014-01-06')));
    }

    /**
     * @test
     */
    public function nonEphiphanyIsNotRed()
    {
        $rule = new EpiphanyRule();

        $this->assertFalse($rule->isRedDay(new \DateTime('1014-01-05')));
        $this->assertFalse($rule->isRedDay(new \DateTime('1014-01-07')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-06-01')));
    }
}
