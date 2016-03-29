<?php

namespace JGI\SwedishDates\Tests\Date;

use JGI\SwedishDates\Date\NewYearsEve;

class NewYearsEveTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function newYearsEveIsMatched()
    {
        $newYearsEve = new NewYearsEve();

        $this->assertTrue($newYearsEve->match(new \DateTime('2000-12-31')));
        $this->assertTrue($newYearsEve->match(new \DateTime('2014-12-31')));
    }

    /**
     * @test
     */
    public function nonNewYearsEveIsNotMatched()
    {
        $newYearsEve = new NewYearsEve();

        $this->assertFalse($newYearsEve->match(new \DateTime('1999-01-31')));
        $this->assertFalse($newYearsEve->match(new \DateTime('2000-01-01')));
        $this->assertFalse($newYearsEve->match(new \DateTime('2014-12-30')));
    }
}
