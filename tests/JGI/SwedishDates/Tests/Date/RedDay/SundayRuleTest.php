<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\SundayRule;

class SundayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sundayIsRed()
    {
        $rule = new SundayRule();

        $this->assertTrue($rule->isRedDay(new \DateTime('2014-03-09')));
        $this->assertTrue($rule->isRedDay(new \DateTime('2014-03-16')));
    }

    /**
     * @test
     */
    public function nonSundayIsNotRed()
    {
        $rule = new SundayRule();

        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-08')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-08')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-10')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-11')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-12')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-13')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-14')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-15')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-17')));
        $this->assertFalse($rule->isRedDay(new \DateTime('2014-03-18')));
    }

}
