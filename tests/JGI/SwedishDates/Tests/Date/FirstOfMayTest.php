<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\FirstOfMay;

class FirstOfMayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function firstOfMayIsRed()
    {
        $firstOfMay = new FirstOfMay();

        $this->assertTrue($firstOfMay->match(new \DateTime('2000-05-01')));
        $this->assertTrue($firstOfMay->match(new \DateTime('2014-05-01')));
    }

    /**
     * @test
     */
    public function nonFirstOfMayIsNotRed()
    {
        $firstOfMay = new FirstOfMay();

        $this->assertFalse($firstOfMay->match(new \DateTime('1014-05-05')));
        $this->assertFalse($firstOfMay->match(new \DateTime('1014-01-05')));
        $this->assertFalse($firstOfMay->match(new \DateTime('2014-06-01')));
    }
}
