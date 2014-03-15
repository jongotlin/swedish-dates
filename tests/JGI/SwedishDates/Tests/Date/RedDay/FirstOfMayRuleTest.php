<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\FirstOfMayRule;

class FirstOfMayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function firstOfMayIsRed()
    {
        $rule = new FirstOfMayRule();

        $this->assertTrue($rule->isRedDay(new \DateTime('2000-05-01')));
        $this->assertTrue($rule->isRedDay(new \DateTime('2014-05-01')));
    }

    /**
     * @test
     */
    public function nonFirstOfMayIsNotRed()
    {
        $rule = new FirstOfMayRule();

        $this->assertFalse($rule->isRedDay(new \DateTime('1014-05-05')));
        $this->assertFalse($rule->isRedDay(new \DateTime('1014-01-05')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-06-01')));
    }
}
