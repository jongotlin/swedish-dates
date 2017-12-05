<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\Sunday;

class SundayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sundayIsRed()
    {
        $sunday = new Sunday();

        $this->assertTrue($sunday->match(new \DateTime('2014-03-09')));
        $this->assertTrue($sunday->match(new \DateTime('2014-03-16')));
    }

    /**
     * @test
     */
    public function nonSundayIsNotRed()
    {
        $sunday = new Sunday();

        $this->assertFalse($sunday->match(new \DateTime('2014-03-08')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-08')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-10')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-11')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-12')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-13')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-14')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-15')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-17')));
        $this->assertFalse($sunday->match(new \DateTime('2014-03-18')));
    }

}
