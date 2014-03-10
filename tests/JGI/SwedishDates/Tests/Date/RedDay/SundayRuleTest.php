<?php

namespace JGI\SwedishDates\Tests\Date\RedDay;

use JGI\SwedishDates\Date\RedDay\SundayRule;

class SundayRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sundaysAreRed()
    {
        $sundayRule = new SundayRule();

        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2014-03-09')));
        $this->assertTrue($sundayRule->isRedDay(new \DateTime('2014-03-16')));
    }

    /**
     * @test
     */
    public function nonSundaysAreNotRed()
    {
        $sundayRule = new SundayRule();

        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-08')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-08')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-10')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-11')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-12')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-13')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-14')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-15')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-17')));
        $this->assertFalse($sundayRule->isRedDay(new \DateTime('2014-03-18')));
    }

}
